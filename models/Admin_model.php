<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct () {
        //                 $q = "Update users set passwd=SHA1('andi+upload') where username='andi'";
        //                 $this->db->query($q);

    }

    public function verify_user($username,$passwd) {
        $query = $this->db
        ->where('username',$username)
        ->where('passwd',sha1($passwd))
        ->limit(1)
        ->get('users');

        if($query->num_rows() > 0) {

            return $query->row();

        }

        return false;

    }

    public function insert_client($names) {
        $names = explode(',',$names);
        foreach($names as $name) {
            $query = $this->db
            ->set('name',trim($name))
            ->insert('clients');
        }
        return true;

    }
    public function delete_client($id) {
        $query = $this->db
        ->where('id',$id)
        ->delete('clients');

        if($query) {

            return true;

        }

        return false;

    }

    public function get_clients() {
        $query = $this->db
        ->order_by('name')
        ->get('clients');

        if($query->num_rows() > 0) {

            return $query->result();

        }

        return false;
    }

    public function get_folders() {
        $this->load->helper('directory');
        $map = directory_map('./uploads/480px/');
        foreach($map as $cat_key => $cat_arr) {
            foreach($cat_arr as $folder_key => $photo_arr) {
                $this->db->where('category',$cat_key);
                $this->db->where('folder',$folder_key);
                $query = $this->db->get('folders');
                if($query->num_rows() > 0) {
                    $result = $query->result();

                    foreach($result as $row) {
                        $map = directory_map('./uploads/480px/'.$row->category.$row->folder);
                        if(!empty($map))
                            foreach($map as $entry) {

                                if(strpos($entry,'00') !== false) {
                                    $found = $entry;
                                    break;
                                }
                            }
                        $row->thumb = $found ? $found : $map[0];
                        $return[$row->category][] = $row;
                    }

                }
                else {
                    $map = directory_map('./uploads/480px/'.$cat_key.$folder_key);
                    if(!empty($map))
                        foreach($map as $entry) {

                            if(strpos($entry,'00') !== false) {
                                $found = $entry;
                                break;
                            }
                        }
                     
                    $row = new stdClass();
                    $row->order = count($cat_arr);
                    $row->category = $cat_key;
                    $row->folder = $folder_key;
                    $row->thumb = $found ? $found : $map[0];
                    $return[$row->category][] = $row;
                }
            }
        }
        return $return;
    }

    public function get_thumbs($cat = NULL,$folder = NULL) {
        $this->load->helper('directory');
        $return = array();
        $query = $this->db->order_by('category')->order_by('order')->get('folders');
        if($query->num_rows() > 0) {
            $result = $query->result();

            foreach($result as $row) {
                $map = directory_map('./uploads/480px/'.$row->category.$row->folder);
                $map1 = directory_map('./uploads/2048px/'.$row->category.$row->folder);

                if(!empty($map))
                    foreach($map as $entry) {

                        if(strpos($entry,'00') !== false) {
                            $found = $entry;
                            break;
                        }
                    }
                $return[$row->category][$row->folder]['thumb'] = $found ? $found : $map[0];
                $return[$row->category][$row->folder]['count'] = count($map1);
                $return[$row->category][$row->folder]['order'] = $row->order."/";



            }
        }
        return $return;
    }
    public function get_photos($cat = NULL,$order = NULL) {
        $query = $this->db->where('category',$cat."/")->where('order',$order)->get('folders');
        $map = array();
        if($query->num_rows() > 0) {
            $result = $query->result();
            foreach($result as $row) {
                $this->load->helper('directory');
                $map = directory_map('./uploads/2048px/'.$row->category.$row->folder);
            }
        }
        return array($map,$row->folder);
    }

    public function get_downloads() {
        $ret = array();
        $this->load->helper('directory');
        $map = directory_map('./uploads/downloads');
        foreach($map as $key => $file) {
            $temp = explode(".",$file);
            if(stripos($temp[0],"_thumb") === false) {
                $ret[$temp[0]]['file_type'] = ".".$temp[1];
                $ret[$temp[0]]['file_name'] = $temp[0];
            }
            else {
                $temp1 = explode("_thumb",$temp[0]);
                $ret[$temp1[0]]['thumb'] = $temp[0];
                $ret[$temp1[0]]['thumb_file_type'] = ".".$temp[1];
            }
        }
        return $ret;
    }

    public function insert_folder($input) {
        $q_get = $this->db
        ->truncate('folders');
        foreach($input as $cat_key => $cat_arr) {
            foreach($cat_arr as $folder_key => $order) {

                $query = $this->db
                ->set('folder',$folder_key)
                ->set('category',$cat_key)
                ->set('order',$order);
                $this->db->insert('folders');
            }
        }
        return false;
    }

    public function upload_files($files,$path) {

        $data = array();
        $files = $files['userfile'];

        $this->load->library('image_lib');

        foreach ($files['name'] as $key => $image) {
            $_FILES['userfile']['name']= $files['name'][$key];
            $_FILES['userfile']['type']= $files['type'][$key];
            $_FILES['userfile']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['userfile']['error']= $files['error'][$key];
            $_FILES['userfile']['size']= $files['size'][$key];

            if (!$this->upload->do_upload('userfile')) {
                $data['msg'][] = $this->upload->display_errors();

            } else {
                $upload_data = $this->upload->data();

                $data['msg'][] = "Upload success of ".$upload_data['raw_name'];
                $data['upload_data'][] = $upload_data;
                $data['path'][] = $path;

            }
        }
        return $data;
    }

}
