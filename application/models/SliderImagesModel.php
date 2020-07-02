<?php

class SliderImagesModel extends TNT_Model {

    public $_table = 'slider_images';

    public function getImages(){

		$this->db->select("$this->_table.*");
		$result = $this->db->get();


		return $result;

	}
}
