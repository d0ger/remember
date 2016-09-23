<?php defined('SYSPATH') or die('No direct script access.');
/**
 * DataTables
 * 
 * @package		DataTables
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2011-2012 Micheal Morgan
 * @license		MIT
 */
class DataTables extends Kohana_DataTables {
	protected $_sortables = [];

	/**
	 * Set or get sortable columns
	 *
	 * @access	public
	 * @param	mixed	NULL|array
	 * @return	mixed	$this|array
	 */
	public function sort_columns(array $columns = NULL)
	{
		if ($columns === NULL)
			return $this->_sortables;

		$this->_sortables = $columns;

		return $this;
	}

	/**
	 * Execute
	 *
	 * @access	public
	 * @param	mixed	NULL|Request
	 * @return	$this
	 */
	public function execute()
	{
		$request = $this->request();

		if ( ! $request instanceof Request)
			throw new Kohana_Exception('DataTables expecting valid Request. If within a
				sub-request, have controller pass `$this->request`.');

		$columns = $this->_paginate->columns();
//		print_r($columns);
//		exit;

		if ($request->query('iSortCol_0') !== NULL)
		{
			for ($i = 0; $i < intval($request->query('iSortingCols')); $i++)
			{
				$column = $columns[intval($request->query('iSortCol_' . $i))];

				$sort = 'Paginate::SORT_' . strtoupper($request->query('sSortDir_' . $i));

				if (defined($sort) && array_key_exists($column, $this->_sortables))
				{
					$this->_paginate->sort($this->_sortables[$column], constant($sort));
				}
			}
		}

		if (!empty($request->query('order')))
		{
			foreach ($request->query('order') as $sort_column)
			{
				$sort = 'Paginate::SORT_' . strtoupper($sort_column['dir']);
//				$sort_column = $columns[$sort_column['column']];
				$this->_paginate->sort($this->_sortables[$sort_column['column']], constant($sort));
			}
		}

		if ($request->query('iDisplayStart') !== NULL && $request->query('iDisplayLength') != '-1')
		{
			$start = $request->query('iDisplayStart');
			$length = $request->query('iDisplayLength');

			$this->_paginate->limit($start, $length);
		}

		$request_search = $request->query('search');

		if (!empty($request_search['value']))
		{
			$this->_paginate->search($request_search['value']);
		}

		$this->_result = $this->_paginate
			->execute()
			->result();

		$this->_count_total = $this->_paginate->count_total();

		// Count should always match total unless search is being applied
		$this->_count = ($request->query('sSearch'))
			? $this->_paginate->count_search_total()
			: $this->_count_total;

		return $this;
	}
}
