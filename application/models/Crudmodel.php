<?php

    class Crudmodel extends CI_Model{

        public function getRecords() {
            $query = $this->db->get('Student');
            if( $query->num_rows() > 0) {
                return $query->result();
            }
        }

        public function saveRecord($data) {
            return $this->db->insert('Student', $data);
        }

        public function getAllRecords( $record_id ) {

            $query = $this->db->get_where('Student', array('roll_no' => $record_id));
            if( $query ->num_rows() > 0 ) {
                return $query->row();
            }
        }

        public function updateRecords( $record_id, $data ) {
            $this->db->where('roll_no', $record_id)
                    ->update('Student', $data);
        }

        public function deleteRecord( $record_id ) {
            return $this->db->delete('Student', array('roll_no' => $record_id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }
    }

?>