<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Model {
    /*     * ************ add insert data *************** */

    function insert_data($table, $data) {
        $this->db->insert($table, $data);
        $num = $this->db->insert_id();
        return $num;
    }

    /*     * ************ add insert num row data *************** */
    /* function insert_data_num($table,$data)
      {
      $query = $this->db->insert($table,$data);
      $num = $query->num_rows();
      return $num;
      } */
    /*     * ************ update data *************** */

    function update_data($table, $where, $data) {
        $this->db->where($where);
        $update = $this->db->update($table, $data);
        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getminfund($table, $column) {
        $query = "SELECT min(`".$column."`) as 'min' FROM `".$table."`";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->min;
    }

    function getmaxfund($table, $column) {
        $query = "SELECT max(`".$column."`) as 'max' FROM `".$table."`";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->max;
    }

    function select_sum() {
        $query = "SELECT sum(`payment_gross`) as 'net_sum' FROM `payment`";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->net_sum;
    }

    function getsum($table, $column, $where) {

        $query = "SELECT sum(`" . $column . "`) as 'sum' FROM `" . $table . "` where " . $where . "";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->sum;
    }

    function select_last_month() {
        $first_day = strtotime("first day of previous month");
        $last_day = strtotime("last day of previous month");
        $query = "SELECT sum(`payment_gross`) as 'net_sum' FROM `payment` where `updated_at` >= '" . $first_day . "' AND `updated_at` <='" . $last_day . "'";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->net_sum;
    }

    function select_last_year() {
        $first_day = strtotime("first day of previous year");
        $last_day = strtotime("last day of previous year");
        $query = "SELECT sum(`payment_gross`) as 'net_sum' FROM `payment` where `updated_at` >= '" . $first_day . "' AND `updated_at` <='" . $last_day . "'";
        $data = $this->db->query($query);
        $final = $data->result();

        return $final[0]->net_sum;
    }

    /* get count for pagination */

    function get_count($table1, $table2, $id1, $id2, $column = '', $where, $orderby, $groupby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        if ($groupby != "") {
            $this->db->group_by($groupby);
        }
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        if ($where != '') {
            foreach ($where as $key => $value) {
                $this->db->where("$key", "$value");
            }
//            $this->db->where($where);	
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }

        $que = $this->db->get();

        return $que->num_rows();
    }

    function getcount($table1) {
        $this->db->select('*');
        $this->db->from($table1);
        $que = $this->db->get();
        return $que->num_rows();
    }

    function getcountwhere($table1, $where) {
        $this->db->select('*');
        $this->db->from($table1);
        if ($where != '') {
            foreach ($where as $key => $value) {
                $this->db->where("$key", "$value");
            }
            //$this->db->where($where);	
        }
        $que = $this->db->get();
        return $que->num_rows();
    }

    /*     * ************ get single   data *************** */

    function getSingle($table, $where) {
        $this->db->where($where);
        $data = $this->db->get($table);
        $get = $data->result_array();

        $num = $data->num_rows();

        if ($num) {
            return $get;
        } else {
            return false;
        }
    }

    /*     * ************ get all data as where class *************** */

    function getwhere($table, $where) {
        $this->db->where($where);
        $data = $this->db->get($table);
        $get = $data->result();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    function getwherein($table, $column, $where, $groupby) {
        $query = "SELECT * FROM `" . $table . "` where `" . $column . "` IN (" . $where . ") GROUP BY `" . $groupby . "`";

        $data = $this->db->query($query);
        $final = $data->result();
        return $final;
    }

    /*     * ************ get all data as where class *************** */

    function getwheres($table, $where) {
        $this->db->where($where);
        $data = $this->db->get($table);
        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    /*     * ************ get all data as where class order by *************** */

    function getwheres_orderby($table, $where, $orderby) {
        $this->db->where($where);
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $data = $this->db->get($table);
        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    function get_groupby($table, $groupby) {

        $this->db->group_by($groupby);
        $data = $this->db->get($table);
        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    /*     * ************ get all data as where class getwhere_limit *************** */

    function getwhere_limit($table, $where, $limit, $orderby) {
        $this->db->where($where);
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $this->db->limit($limit);
        $data = $this->db->get($table);

        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    function get_where_order_group($table, $where, $limit, $orderby, $groupby) {
        $this->db->where($where);
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $this->db->group_by($groupby);
        $this->db->limit($limit);
        $data = $this->db->get($table);

        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    /*     * *************Start Get All Data***************************** */

    function getdata($table) {
        $this->db->select("*");
        $data = $this->db->get($table);
        $get_data = $data->result_array();
        if ($get_data) {
            return $get_data;
        } else {
            return false;
        }
    }

    /*     * *************End Get All Data****************************** */

    /*     * *************Start Get All Data orderby***************************** */

    function getdata_orderby($table, $orderby) {
        $this->db->select("*");
        if ($orderby != '') {
            $this->db->order_by($orderby, 'ASC');
        }
        $data = $this->db->get($table);
        $get_data = $data->result_array();
        if ($get_data) {
            return $get_data;
        } else {
            return false;
        }
    }

    /*     * *************End Get All Data orderby****************************** */

    /*     * ************ Delete data *************** */

    function delete($table, $where) {

        $this->db->where($where);
        //$this->db->limit('1');
        $del = $this->db->delete($table);
        if ($del) {
            return true;
        } else {
            return false;
        }
    }

    function delete_single($table, $where) {

        $this->db->where($where);
        $this->db->limit('1');
        $del = $this->db->delete($table);
        if ($del) {
            return true;
        } else {
            return false;
        }
    }

    /*     * ***********Query two table join ****************** */

    public function two_tables($table1, $table2, $id1, $id2, $column = '', $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);

        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    public function get_data_twotable_column_where($table1, $table2, $id1, $id2, $column = '', $where, $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    public function get_data_twotable_column_where_group($table1, $table2, $id1, $id2, $column = '', $where, $orderby, $group_by) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        if ($group_by != "") {
            $this->db->group_by($group_by);
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);

        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    public function get_data_three_table_column_where($table1, $table2, $table3, $id1, $id2, $id3, $column = '', $where, $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        $this->db->join($table3, $table3 . '.' . $id3 . '=' . $table1 . '.' . $id3);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    public function get_data_four_table_column_where($table1, $table2, $table3, $table4, $id1, $id2, $id3, $match1, $match2, $match3, $column = '', $where, $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id1 . '=' . $table1 . '.' . $match1);
        $this->db->join($table3, $table3 . '.' . $id2 . '=' . $table1 . '.' . $match2);
        $this->db->join($table4, $table4 . '.' . $id3 . '=' . $table1 . '.' . $match3);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result();
    }

    public function get_data_five_table_column_where($table1, $table2, $table3, $table4, $table5, $id1, $id2, $id3, $id4, $match1, $match2, $match3, $match4, $column = '', $where, $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id1 . '=' . $table1 . '.' . $match1);
        $this->db->join($table3, $table3 . '.' . $id2 . '=' . $table1 . '.' . $match2);
        $this->db->join($table4, $table4 . '.' . $id3 . '=' . $table1 . '.' . $match3);
        $this->db->join($table5, $table5 . '.' . $id4 . '=' . $table1 . '.' . $match4, 'left');
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result();
    }

    /*     * **********End Join Two Table****************** */
    /*     * ***********Query two table join limit ****************** */

    public function get_data_twotable_column_where_limit($table1, $table2, $id1, $id2, $column = '', $where, $orderby, $limit) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
            $this->db->limit($limit);
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    /*     * **********End Join Two Table limit****************** */
    /*     * ***********Query two table join ****************** */

    public function get_data_twotable_like($table1, $table2, $id1, $id2, $column = '', $where, $orderby, $num, $offset) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        if ($where != '') {
            foreach ($where as $key => $value) {
                $this->db->or_like("$key", "$value");
            }
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        if ($num != '') {
            $this->db->limit($num, $offset);
        }
        if ($offset != '' and $num != '') {
            $this->db->limit($num, $offset);
        }
        $que = $this->db->get();
        return $que->result_array();
    }

    /*     * **********End Join Two Table****************** */

    /*     * ************ Start Join  data  for title subtitle *************** */

    public function join_profile_registration() {
        $this->db->select('*');
        $this->db->from('tbl_profile');
        $this->db->join('tbl_registration', 'tbl_profile.userid=tbl_registration.id');
        /* $this->db->where('tbl_product_desc',$where); */
        /* $this->db->order_by('c.track_title','asc');  */
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getproduct($table1, $table2, $table3, $table4, $table5, $table6, $table7, $table8, $id1, $id2, $id3, $id4, $id5, $id6, $id7, $id8, $condition) {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        $this->db->join($table3, $table3 . '.' . $id3 . '=' . $table1 . '.' . $id1);
        $this->db->join($table4, $table4 . '.' . $id4 . '=' . $table1 . '.' . $id1);
        $this->db->join($table5, $table5 . '.' . $id5 . '=' . $table1 . '.' . $id1);
        $this->db->join($table6, $table6 . '.' . $id6 . '=' . $table1 . '.' . $id1);
        $this->db->join($table7, $table7 . '.' . $id7 . '=' . $table1 . '.' . $id1);
        $this->db->join($table8, $table8 . '.' . $id8 . '=' . $table1 . '.' . $id1);

        if ($where != '') {
            foreach ($where as $key => $value) {
                $this->db->where($condition);
            }
        }
    }

    public function get_product_where($table1, $table2, $table3, $table4, $table5, $table6, $table7, $table8, $table9, $id1, $id2, $id3, $id4, $id5, $id6, $id7, $id8, $match1, $match2, $match3, $match4, $match5, $match6, $match7, $match8, $column = '', $where, $orderby) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.' . $id1 . '=' . $table1 . '.' . $match1);
        $this->db->join($table3, $table3 . '.' . $id2 . '=' . $table1 . '.' . $match2);
        $this->db->join($table4, $table4 . '.' . $id3 . '=' . $table1 . '.' . $match3);
        $this->db->join($table5, $table5 . '.' . $id4 . '=' . $table1 . '.' . $match4);
        $this->db->join($table6, $table6 . '.' . $id5 . '=' . $table1 . '.' . $match5);
        $this->db->join($table7, $table7 . '.' . $id6 . '=' . $table1 . '.' . $match6);
        $this->db->join($table8, $table8 . '.' . $id7 . '=' . $table1 . '.' . $match7);
        $this->db->join($table9, $table9 . '.' . $id8 . '=' . $table1 . '.' . $match8);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, 'DESC');
        }
        $que = $this->db->get();

        return $que->result();
    }

    public function get_data_two_product_where($table1, $table2, $id1, $id2, $column = '', $where, $orderby, $order_value, $limit, $start) {
        if ($column != '') {
            $this->db->select($column);
        } else {
            $this->db->select('*');
        }
        $this->db->from($table1);
        $this->db->limit($limit, $start);
        $this->db->join($table2, $table2 . '.' . $id2 . '=' . $table1 . '.' . $id1);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($table2 . '.' . $orderby, $order_value);
        }
        $que = $this->db->get();

        return $que->result_array();
    }

    function getwhere_array($table, $where, $orderby, $sort_value, $limit, $start) {
        $this->db->limit($limit, $start);

        $this->db->where($where);
        if ($orderby != '') {
            $this->db->order_by($orderby, $sort_value);
        }
        $data = $this->db->get($table);
        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    function getwhere_array_two($table1, $table2, $id1, $id2, $where, $orderby, $sort_value, $limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->from($table2);
        $this->db->where($where);
        $this->db->join($table1, $table1 . '.' . $id1 . '=' . $table2 . '.' . $id2);
        if ($orderby != '') {
            $this->db->order_by($orderby, $sort_value);
        }
        $data = $this->db->get();
        $get = $data->result_array();
        if ($get) {
            return $get;
        } else {
            return FALSE;
        }
    }

    /*     * ************ End Join  data  for title subtitle *************** */
}

/* End of file home.php */
/* Location: ./application/model/home.php */


	
	