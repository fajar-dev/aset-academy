<?php
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Login');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>admin";
			</script>
			<?php
		}
		
	}
	
	function index()
	{
		$this->load->view('login');
	}
	
	function proses()
	{
		$m = $this->input->post('user_adm');
		$p = $this->input->post('pass_adm');
		
		$where = array(
			'user_admin'=>$m,
			'pass_admin'=>md5($p)
		);
		$cek = $this->Model_Login->cek_login("tb_admin",$where)->num_rows();
		if($cek > 0 ){
			
			$sesi = array(
				'user_admin'=>$m,
				'status'=>"login"
				);
			$this->session->set_userdata($sesi);
			?>
			<script>
			window.location="<?php echo base_url(); ?>admin";
			</script>
			<?php
		}else{
			?>
			<script>
			alert('Username/Password Salah!');
			window.location="<?php echo base_url(); ?>";
			</script>
			<?php
		}
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		?>
		<script>
			window.location="<?php echo base_url(); ?>login";
		</script>
		<?php
	}

	
	
	
}
