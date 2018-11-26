<div id="formWrapper" style="margin-top: 10px;">
	<fieldset class="field_set">
		<legend>Check Konfigurasi Server</legend>
		<table>
			<tr>
				<td>Source File Terbaca ? </td>
				<td>:</td>
				<td>
					<?php if($is_source_file_writeable) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>OpenSSL PHP Extension ? </td>
				<td>:</td>
				<td>
					<?php if($is_open_ssl) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>PDO PHP Extension ? </td>
				<td>:</td>
				<td>
					<?php if($is_pdo) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Mbstring PHP Extension ? </td>
				<td>:</td>
				<td>
					<?php if($is_mbstring) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Tokenizer PHP Extension ? </td>
				<td>:</td>
				<td>
					<?php if($is_tokenizer) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>XML PHP Extension ? </td>
				<td>:</td>
				<td>
					<?php if($is_xml) : ?>
						<span style="color: green; font-weight: bold;">
							OK
						</span>
					<?php else : ?>
						<span style="color: red; font-weight: bold;">
							Tidak
						</span>
					<?php endif; ?>
				</td>
			</tr>
		</table>
	</fieldset>
</div>