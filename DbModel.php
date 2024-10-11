<?php
	class DB {
		private $connect;
		
		public function __construct()
		{
			$this->connect = new mysqli("localhost", "root", "", "main1");
		}

		public function fetchall()
		{
			$result = $this->connect->query("SELECT * FROM `users`");
			$result = mysqli_fetch_assoc($result);
			return $result;
		}

		public function insert($datas) 
		{
			$stmt = $this->connect->prepare("INSERT INTO `users`(`id`, `username`, `password`)VALUES(NULL, ?, ?)");
			$stmt->bind_param($datas[0], $datas[1]);
			$stmt->execute();
		}

		public function delete($id) {
			$stmt = $this->connect->query("DELETE FROM `users` WHERE `id` = ?");
			$stmt->bind_param($id);
			$stmt->execute();
		}
		public function update($datas) {
			$stmt = $this->connect->query("UPDATE `users` SET `username` = ?, `password` = ? WHERE `id` = ?");
			$stmt->bind_param($datas[2]);
		}
	}

?>
