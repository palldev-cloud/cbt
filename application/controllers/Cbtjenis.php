<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjenis extends CI_Controller { public function __construct() { goto XfoZd; XfoZd: parent::__construct(); goto Y3lIE; bkvhl: goto rGiB6; goto UcnPy; ZdAK1: $this->load->model("\115\141\x73\164\145\162\x5f\x6d\x6f\144\x65\154", "\x6d\x61\163\164\145\162"); goto AwL0C; tSBCU: $this->load->model("\x4c\x6f\147\137\x6d\157\x64\x65\154", "\x6c\157\x67\x67\151\x6e\147"); goto bXtIh; d3LKf: if ($this->ion_auth->is_admin()) { goto DCz5Y; } goto Lf1ne; AwL0C: $this->load->model("\x44\141\163\150\142\x6f\141\162\144\x5f\155\x6f\x64\145\154", "\x64\x61\x73\150\x62\x6f\141\x72\144"); goto MvChm; PiFMd: redirect("\x61\165\x74\x68"); goto yyujF; Lf1ne: show_error("\x48\x61\x6e\x79\x61\x20\101\144\x6d\151\x6e\151\x73\164\162\141\x74\157\162\x20\x79\141\x6e\x67\x20\x64\151\142\x65\x72\x69\x20\150\x61\x6b\x20\x75\156\164\x75\x6b\40\x6d\x65\x6e\147\141\x6b\163\x65\x73\40\x68\141\x6c\x61\x6d\141\x6e\40\151\156\x69\54\x20\x3c\x61\40\150\162\x65\146\x3d\x22" . base_url("\x64\x61\163\x68\x62\x6f\x61\x72\x64") . "\42\x3e\113\145\155\x62\x61\154\x69\x20\x6b\x65\x20\x6d\145\x6e\x75\40\x61\x77\141\154\74\57\141\76", 403, "\101\153\163\x65\163\40\124\x65\162\x6c\141\x72\141\156\x67"); goto RIMTT; UcnPy: DzgJo: goto PiFMd; wO8i7: $this->load->library(["\x64\x61\164\x61\x74\x61\142\x6c\145\163", "\146\x6f\x72\x6d\x5f\x76\141\154\151\144\x61\x74\151\x6f\156"]); goto ZdAK1; bXtIh: $this->form_validation->set_error_delimiters('', ''); goto HRl_s; RIMTT: DCz5Y: goto bkvhl; yyujF: rGiB6: goto wO8i7; MvChm: $this->load->model("\x43\142\164\x5f\x6d\157\144\x65\x6c", "\143\x62\x74"); goto tSBCU; Y3lIE: if (!$this->ion_auth->logged_in()) { goto DzgJo; } goto d3LKf; HRl_s: } public function output_json($data, $encode = true) { goto UyqDG; u1wFa: sa0xM: goto yg55F; ZP4pr: $data = json_encode($data); goto u1wFa; yg55F: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\141\x74\151\157\x6e\57\x6a\x73\x6f\156")->set_output($data); goto gxbec; UyqDG: if (!$encode) { goto sa0xM; } goto ZP4pr; gxbec: } public function index() { goto anJoC; eA4sB: $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\x65\163\57\144\141\163\x68\142\x6f\141\x72\x64\57\137\x68\145\141\x64\x65\x72", $data); goto oWSud; LCFuP: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto nKWOl; JTgPW: $data["\164\160"] = $this->dashboard->getTahun(); goto azVnl; U_a1G: $this->load->view("\137\164\145\155\x70\x6c\141\164\x65\x73\x2f\x64\141\x73\x68\142\157\141\162\144\57\137\146\157\157\164\x65\x72"); goto IuNdB; azVnl: $data["\x74\160\137\x61\143\x74\x69\x76\145"] = $this->dashboard->getTahunActive(); goto LCFuP; nKWOl: $data["\163\x6d\x74\137\141\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive(); goto eA4sB; anJoC: $user = $this->ion_auth->user()->row(); goto SH_nA; SH_nA: $data = ["\x75\x73\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\x4a\145\x6e\x69\x73\40\125\x6a\x69\141\x6e", "\163\165\142\x6a\x75\144\165\154" => "\x44\141\164\x61\40\112\145\x6e\x69\163\x20\125\x6a\x69\x61\x6e", "\x70\x72\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto JTgPW; oWSud: $this->load->view("\143\x62\x74\x2f\x6a\145\x6e\x69\x73\x2f\x64\141\x74\x61"); goto U_a1G; IuNdB: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function add() { goto frjDk; zQSaV: $this->output_json($data); goto G6JLR; frjDk: $insert = ["\x6e\x61\x6d\x61\x5f\x6a\145\156\151\x73" => $this->input->post("\x6e\141\x6d\141\x5f\x6a\145\x6e\x69\x73", true), "\x6b\157\144\145\x5f\x6a\145\156\x69\163" => $this->input->post("\x6b\x6f\x64\145\137\152\145\156\151\163", true)]; goto YLPoS; ssVZn: $data["\x73\x74\x61\x74\x75\x73"] = $insert; goto zQSaV; YLPoS: $this->master->create("\143\142\x74\137\x6a\x65\156\x69\163", $insert, false); goto ssVZn; G6JLR: } public function update() { $data = $this->cbt->updateJenis(); $this->output->set_content_type("\x61\160\x70\x6c\x69\143\141\x74\x69\157\156\x2f\x6a\163\x6f\x6e")->set_output($data); } public function delete() { goto qqPrg; Lxnn0: goto uTIK_; goto YNNK1; Wqz_A: uTIK_: goto ntUfY; DFGPw: $this->output_json(["\x73\x74\141\x74\x75\163" => false]); goto Wqz_A; M1S0t: lMXAj: goto Lxnn0; YNNK1: WQBay: goto DFGPw; vDTWa: if (!$chk) { goto WQBay; } goto ZZk94; qqPrg: $chk = $this->input->post("\x63\x68\x65\143\x6b\x65\144", true); goto vDTWa; ZZk94: if (!$this->master->delete("\x63\142\164\137\x6a\x65\x6e\x69\163", $chk, "\x69\x64\x5f\x6a\145\156\x69\163")) { goto lMXAj; } goto Bod8F; Bod8F: $this->output_json(["\163\x74\x61\x74\165\163" => true, "\164\x6f\164\141\x6c" => count($chk)]); goto M1S0t; ntUfY: } public function saveLog($type, $desc) { $user = $this->ion_auth->user()->row(); $this->logging->createLog($user->id, $type, $desc); } }
