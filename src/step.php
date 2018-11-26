<!-- STEP 1 --> 
<?php
	if($next_step == 0) : 
?>
	<form action="" method="POST">
		<fieldset>
			<legend>Setting Database</legend>
			<table>
				<tr>
					<td>CONNECTION</td>
					<td>:</td>
					<td>
						<select name="DB_CONNECTION">
							<option value="mysql">Mysql</option>
							<option value="postgres">Postgres</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>HOST</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_HOST" value="<?php echo $_SESSION['DB_HOST']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>PORT</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_PORT" value="<?php echo $_SESSION['DB_PORT']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_USERNAME" value="<?php echo $_SESSION['DB_USERNAME']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_PASSWORD">
					</td>
				</tr>
				<tr>
					<td>DATABASE NAME</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_DATABASE" value="<?php echo $_SESSION['DB_DATABASE']; ?>">
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align: center;">
						<br><br>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align: center;">
					
						<button 
							type="submit" 
							<?php if(!$is_next_step) : ?>
								style="cursor: pointer; padding: 7px; font-weight: bold;"
								disabled="disabled"
							<?php else : ?>
								style="cursor: pointer;  background-color: #4CAF50; color: #fff; padding: 7px; font-weight: bold;"
							<?php endif; ?>
						>
							NEXT ->
						</button>
						<br>
						<p style="font-size: 11px;">
							Tombol Lanjut akan aktif jika konfigurasi server 'OK' semua.
						</p>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php endif; ?>
<!-- END STEP 1 -->

<!--  STEP 2 -->
<?php if($next_step == 1) : ?>
	<form action="" method="POST">
		<fieldset>
			<legend>Setting Pengguna</legend>
			<table>
				<tr>
					<td colspan="3" style="padding: 4px; background: #fafafa; text-align: center;">
						Super User
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="SA_NAME" value="<?php echo $_SESSION['SA_NAME']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email/NRP</td>
					<td>:</td>
					<td>
						<input type="email" name="SA_EMAIL" value="<?php echo $_SESSION['SA_EMAIL']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input type="text" name="SA_PASSWORD">
					</td>
				</tr>
				<tr>
					<td colspan="3" style="padding: 4px; background: #fafafa; text-align: center;">
						Admin
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="ADM_NAME" value="<?php echo $_SESSION['ADM_NAME']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email/NRP</td>
					<td>:</td>
					<td>
						<input type="email" name="ADM_EMAIL" value="<?php echo $_SESSION['ADM_EMAIL']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input type="text" name="ADM_PASSWORD">
					</td>
				</tr>
			
				<tr>
					<td colspan="3" style="text-align: center;">
						<br><br>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align: center;">
					
						<button 
							type="submit" 
							<?php if(!$is_next_step) : ?>
								style="cursor: pointer; padding: 7px; font-weight: bold;"
								disabled="disabled"
							<?php else : ?>
								style="cursor: pointer;  background-color: #4CAF50; color: #fff; padding: 7px; font-weight: bold;"
							<?php endif; ?>
						>
							NEXT ->
						</button>
						<br>
						<p style="font-size: 11px;">
							Tombol Lanjut akan aktif jika konfigurasi server 'OK' semua.
						</p>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php endif; ?>
<!-- END STEP 2 -->
<!--  STEP 3 -->
<?php if($next_step == 2) : ?>
	<form action="" method="POST" onSubmit="if(!confirm('Apakah anda yakin?')){return false;}">
		<fieldset>
			<legend>Konfirmasi</legend>
			<table>
				<tr>
					<td colspan="3"><b>DATABASE</b></td>
				</tr>
				<tr>
					<td colspan="3"><hr></td>
				</tr>
				<tr>
					<td>HOST</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_HOST" value="<?php echo $_SESSION['DB_HOST']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>PORT</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_PORT" value="<?php echo $_SESSION['DB_PORT']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_USERNAME" value="<?php echo $_SESSION['DB_USERNAME']; ?>" disabled> 
					</td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_PASSWORD" value="<?php echo $_SESSION['DB_PASSWORD']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>NAMA DATABASE</td>
					<td>:</td>
					<td>
						<input type="text" name="DB_DATABASE" value="<?php echo $_SESSION['DB_DATABASE']; ?>" disabled>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="3"><b>PENGGUNA</b></td>
				</tr>
				<tr>
					<td colspan="3"><hr></td>
				</tr>
				<tr>
					<td colspan="3" style="padding: 4px; background: #fafafa; text-align: center;">
						Super User
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="SA_NAME" value="<?php echo $_SESSION['SA_NAME']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>Email/NRP</td>
					<td>:</td>
					<td>
						<input type="email" name="SA_EMAIL" value="<?php echo $_SESSION['SA_EMAIL']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input type="text" name="SA_PASSWORD" value="<?php echo $_SESSION['SA_PASSWORD']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="padding: 4px; background: #fafafa; text-align: center;">
						Admin
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="ADM_NAME" value="<?php echo $_SESSION['ADM_NAME']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>Email/NRP</td>
					<td>:</td>
					<td>
						<input type="email" name="ADM_EMAIL" value="<?php echo $_SESSION['ADM_EMAIL']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input type="text" name="ADM_PASSWORD" value="<?php echo $_SESSION['ADM_PASSWORD']; ?>" disabled>
					</td>
				</tr>
			
			</table>
			<table>
				<tr>
					<td colspan="3" style="text-align: center;">
						<br><br>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align: center;">
						<input type="hidden" name="indi">
						<button 
							type="submit" 
							<?php if(!$is_next_step) : ?>
								style="cursor: pointer; padding: 7px; font-weight: bold;"
								disabled="disabled"
							<?php else : ?>
								style="cursor: pointer;  background-color: #4CAF50; color: #fff; padding: 7px; font-weight: bold;"
							<?php endif; ?>
						>
							Install
						</button>
						<br>
					
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php endif; ?>
<!-- END STEP 3 -->