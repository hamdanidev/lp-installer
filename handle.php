<?php 

if(!empty($_POST)) {
	$step = $_SESSION['step'];
	$_SESSION['errors'] = null;
	//Handle Database Connection
	if($step == 0 AND !isset($_POST['retry'])) :
		
		$_SESSION['DB_HOST'] = $_POST['DB_HOST'];
		$_SESSION['DB_PORT'] = $_POST['DB_PORT'];
		$_SESSION['DB_DATABASE'] = $_POST['DB_DATABASE'];
		$_SESSION['DB_USERNAME'] = $_POST['DB_USERNAME'];
		$_SESSION['DB_PASSWORD'] = $_POST['DB_PASSWORD'];

		$db_connection = pg_connect ("
			host=".$_SESSION['DB_HOST']." 
			dbname=".$_SESSION['DB_DATABASE']." 
			user=".$_SESSION['DB_USERNAME']." 
			password=".$_SESSION['DB_PASSWORD']."
			connect_timeout=5
		");
	    if($db_connection) {
	      $_SESSION['step'] = 1;
	      $next_step = 1;
	    } else {
	        $_SESSION['errors'] = 'Gagal konek ke database';
	    } 
	endif;
	if($step == 1 AND !isset($_POST['retry'])) :

		if($_POST['SA_NAME'] == '' OR $_POST['SA_EMAIL'] == ''  OR $_POST['SA_PASSWORD'] == ''
			OR $_POST['ADM_NAME'] == '' OR $_POST['ADM_EMAIL'] == ''  OR $_POST['ADM_PASSWORD'] == ''
		) {
			$_SESSION['errors'] = 'Semua informasi pengguna wajib di isi';
		} else {
			$_SESSION['SA_NAME'] = $_POST['SA_NAME'];
			$_SESSION['SA_EMAIL'] = $_POST['SA_EMAIL'];
			$_SESSION['SA_PASSWORD'] = $_POST['SA_PASSWORD'];
			$_SESSION['ADM_NAME'] = $_POST['ADM_NAME'];
			$_SESSION['ADM_EMAIL'] = $_POST['ADM_EMAIL'];
			$_SESSION['ADM_PASSWORD'] = $_POST['ADM_PASSWORD'];
			$_SESSION['errors'] = null;
			$_SESSION['step'] = 2;
			$next_step = 2;
		}
		
	endif;

	if($step == 2 AND !isset($_POST['retry'])) :
		$env_file = fopen(".env", "w") or die("Unable to open file!");
		$env_basic = "APP_NAME=Inventory Puspenerbad\nAPP_ENV=local\nAPP_KEY=base64:+fO3Xer9Vh2VkaLyM+gsxP0HkJiwuj5hx5G5ZV6lOnM=\nAPP_DEBUG=false\nAPP_LOG_LEVEL=debug\nAPP_URL=http://localhost\n";
		fwrite($env_file, $env_basic);

		$env_db = "DB_CONNECTION=pgsql\nDB_HOST=localhost\nDB_PORT=5433\nDB_DATABASE=db-inv-puspenerbad\nDB_USERNAME=postgres\nDB_PASSWORD=";
		fwrite($env_file, $env_db);

		fclose($env_file);		
	endif;

	if(isset($_POST['retry'])) {
		session_destroy();
		$_SESSION['step'] = 0;
		$next_step = 0;
	}
}
?>