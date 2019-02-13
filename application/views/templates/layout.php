<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head'); ?>


<?php 
if(isset($page) && $page != '') 
	$this->load->view($page);
?>

<?php $this->load->view('templates/js-files'); ?>
</html>
