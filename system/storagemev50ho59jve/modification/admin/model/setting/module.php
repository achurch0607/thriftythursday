<?php
class ModelSettingModule extends Model {
	public function addModule($code, $data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `code` = '" . $this->db->escape($code) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "'");
	}
	
	public function editModule($module_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "' WHERE `module_id` = '" . (int)$module_id . "'");
	}

	public function deleteModule($module_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_module` WHERE `code` LIKE '%." . (int)$module_id . "'");
	}
		
public function addModule2($code, $data) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `code` = '" . $this->db->escape($code) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "'");

			$module_id = $this->db->getLastId();

			$this->db->query("INSERT INTO " . DB_PREFIX . "layout_module SET layout_id = '" . (int)$data['layout_id'] . "', code = '" . $this->db->escape($code) .'.'.$module_id. "', position = '" . $this->db->escape($data['position']) . "', sort_order = '" . (int)$data['sort_order'] . "'");
		
	}

	public function editModule2($module_id, $data,$code) {
		$this->db->query("UPDATE `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "' WHERE `module_id` = '" . (int)$module_id . "'");
		$code = $code.'.'.$module_id;
		$this->db->query("UPDATE " . DB_PREFIX . "layout_module SET layout_id = '" . (int)$data['layout_id'] . "',  position = '" . $this->db->escape($data['position']) . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE code = '".$code."'");
	}
	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		if ($query->row) {
			return json_decode($query->row['setting'], true);
		} else {
			return array();
		}
	}
	
	public function getModules() {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` ORDER BY `code`");

		return $query->rows;
	}	
		
	public function getModulesByCode($code) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `code` = '" . $this->db->escape($code) . "' ORDER BY `name`");

		return $query->rows;
	}	
	
	public function deleteModulesByCode($code) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "module` WHERE `code` = '" . $this->db->escape($code) . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_module` WHERE `code` LIKE '" . $this->db->escape($code) . "' OR `code` LIKE '" . $this->db->escape($code . '.%') . "'");
	}	
}