<?php 
	require_once('apps/config.php');

	$pageTitle = 'Добавить товар'; 
	
?>

<?php include('./templates/_head.php');?>	

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<!-- header -->
			<?php include('./templates/_header.php'); ?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form action="add-new.php" method="POST" enctype="multipart/form-data">
						<!-- ДЛЯ ОТПРАВКИ ФОТО ОБЗ. multipart/form-data -->
						<div class="form-group">
							<input name="title" type="text" class="form-control" placeholder="Название">
						</div>
						<div class="form-group">
							<select class="form-control" name="category">
								<option value="Телефоны">Телефоны</option>
								<option value="Планшеты">Планшеты</option>
								<option value="Ноутбуки">Ноутбуки</option>
								<option value="Компьютеры">Компьютеры</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control" placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input name="sale" class="form-check-input" type="checkbox" value="1">
							<label class="form-check-label" for="sale">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input name="new" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1">
							<label class="form-check-label" for="new">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="img">Фото:</label>
							<input  name="img" type="file" class="form-control-file" id="img">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="desc">Описание:</label>
								<textarea name="description" class="form-control" id="desc" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

