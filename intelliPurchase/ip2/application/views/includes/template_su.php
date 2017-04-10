<!-- Dynamic Template File to Load the unchanging Header and Footer Already to optimize performance -->

<?php $this->load->view('includes/header_su'); ?>

<?php $this->load->view($main_content); ?>

<?php $this->load->view('includes/footer_su'); ?>