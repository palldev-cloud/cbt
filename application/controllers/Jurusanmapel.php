<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\120\x41\124\x48") or exit("\116\x6f\x20\x64\x69\x72\145\143\x74\40\163\x63\x72\151\160\x74\x20\x61\143\x63\145\163\163\x20\141\154\154\157\x77\145\x64"); class JurusanMapel extends CI_Controller { public function __construct() { goto cGlSY; f8mNo: MOwab: goto GA9TV; NiLjh: $this->load->model("\115\x61\163\x74\x65\x72\x5f\x6d\x6f\x64\x65\x6c", "\x6d\x61\163\164\x65\162"); goto O8aXw; Rq_H_: IHWy4: goto szXsb; GA9TV: redirect("\x61\165\x74\x68"); goto Rq_H_; cGlSY: parent::__construct(); goto YUf6B; YUf6B: if (!$this->ion_auth->logged_in()) { goto MOwab; } goto KUFZq; jD9aJ: iNlo7: goto Kv41H; O8aXw: $this->form_validation->set_error_delimiters('', ''); goto hYH_Y; Kv41H: goto IHWy4; goto f8mNo; szXsb: $this->load->library(["\x64\141\x74\141\164\x61\x62\x6c\145\x73", "\146\x6f\x72\x6d\137\166\x61\154\151\x64\x61\x74\x69\157\156"]); goto NiLjh; KUFZq: if ($this->ion_auth->is_admin()) { goto iNlo7; } goto gkgeV; gkgeV: show_error("\110\141\x6e\x79\141\x20\x41\x64\155\x69\x6e\151\163\x74\x72\141\x74\x6f\x72\x20\171\141\156\x67\x20\x64\151\x62\x65\162\151\40\150\141\x6b\x20\x75\156\164\165\x6b\40\x6d\145\x6e\147\x61\153\x73\x65\163\x20\150\141\154\x61\155\x61\x6e\40\151\x6e\151\x2c\40\x3c\x61\x20\x68\x72\145\146\75\42" . base_url("\144\x61\x73\x68\142\157\141\162\x64") . "\42\x3e\113\x65\155\142\141\154\151\x20\x6b\x65\x20\x6d\x65\x6e\165\40\141\167\x61\154\x3c\57\x61\x3e", 403, "\x41\153\x73\x65\x73\x20\124\145\162\x6c\141\x72\141\156\147"); goto jD9aJ; hYH_Y: } public function output_json($data, $encode = true) { goto pwO2f; pwO2f: if (!$encode) { goto F26uw; } goto x8uC0; zoL0e: F26uw: goto W0_lK; W0_lK: $this->output->set_content_type("\141\160\x70\154\x69\x63\x61\x74\x69\x6f\x6e\57\152\163\x6f\156")->set_output($data); goto Hb2P6; x8uC0: $data = json_encode($data); goto zoL0e; Hb2P6: } public function index() { goto rzW5k; e9MhI: $this->load->view("\x5f\x74\145\155\160\154\x61\x74\x65\x73\x2f\x64\x61\163\x68\x62\157\141\162\144\57\137\146\x6f\x6f\x74\145\x72\x2e\160\x68\x70"); goto wstYf; dCsrL: $this->load->view("\x72\x65\x6c\x61\x73\151\x2f\x6a\x75\x72\x75\x73\141\x6e\155\x61\160\x65\x6c\x2f\x64\x61\164\x61"); goto e9MhI; moRGr: $this->load->view("\x5f\x74\145\x6d\160\154\x61\x74\x65\x73\x2f\144\141\x73\150\142\x6f\141\162\x64\x2f\x5f\150\145\x61\x64\145\162\56\x70\x68\160", $data); goto dCsrL; rzW5k: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\152\x75\144\x75\154" => "\x4a\165\x72\x75\163\141\x6e\40\x4d\141\164\x61\40\113\x75\x6c\151\141\x68", "\x73\x75\x62\x6a\x75\144\x75\154" => "\x44\x61\164\141\40\x4a\165\162\165\x73\x61\x6e\40\115\x61\x74\141\40\x4b\x75\154\151\x61\150"]; goto moRGr; wstYf: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto AHY6h; AHY6h: $data = ["\x75\163\145\162" => $this->ion_auth->user()->row(), "\x6a\x75\144\165\x6c" => "\124\x61\155\142\x61\150\40\x4a\165\x72\x75\x73\141\x6e\40\115\x61\x74\x61\40\113\165\154\x69\x61\150", "\x73\x75\142\x6a\x75\144\165\154" => "\x54\x61\155\142\141\150\40\x44\141\164\x61\x20\x4a\165\x72\x75\163\x61\156\40\115\x61\164\141\40\x4b\x75\x6c\x69\141\150", "\155\x61\x70\x65\154" => $this->master->getMapel()]; goto EmZtX; EmZtX: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\145\163\x2f\144\141\x73\150\x62\x6f\141\162\x64\x2f\x5f\x68\145\x61\144\x65\162\56\160\150\160", $data); goto qj4zZ; qj4zZ: $this->load->view("\x72\x65\x6c\141\x73\x69\x2f\152\165\x72\x75\x73\141\156\155\141\160\145\x6c\x2f\141\x64\144"); goto AYJgx; AYJgx: $this->load->view("\137\x74\145\155\160\154\x61\x74\145\163\x2f\x64\141\163\x68\x62\157\x61\162\144\57\x5f\x66\x6f\x6f\x74\x65\x72\56\x70\x68\160"); goto ZBcSz; ZBcSz: } public function edit($id) { goto NChF8; BI1Ni: $this->load->view("\162\145\x6c\141\163\x69\x2f\x6a\x75\162\x75\x73\x61\156\155\x61\x70\x65\154\x2f\x65\144\x69\164"); goto cWiz0; cWiz0: $this->load->view("\x5f\x74\145\155\160\x6c\141\164\145\163\x2f\144\141\163\150\142\157\141\162\x64\57\137\x66\157\157\x74\145\x72\x2e\x70\150\160"); goto nW8Qc; NChF8: $data = ["\165\x73\145\162" => $this->ion_auth->user()->row(), "\x6a\165\144\x75\154" => "\x45\144\151\164\40\x4a\165\162\x75\x73\x61\156\x20\115\x61\x74\x61\x20\x4b\165\x6c\151\141\x68", "\163\165\x62\152\165\x64\165\x6c" => "\105\144\x69\x74\x20\104\x61\164\x61\40\112\165\162\165\163\x61\x6e\40\115\x61\164\141\x20\x4b\x75\x6c\x69\x61\150", "\155\x61\160\145\154" => $this->master->getMapelById($id, true), "\151\x64\x5f\x6d\x61\160\x65\154" => $id, "\x61\154\x6c\x5f\152\165\162\x75\x73\x61\x6e" => $this->master->getAllJurusan(), "\x6a\165\x72\x75\x73\141\x6e" => $this->master->getJurusanByIdMapel($id)]; goto Dtkfz; Dtkfz: $this->load->view("\137\164\145\x6d\160\x6c\x61\164\145\163\x2f\x64\141\x73\x68\x62\157\x61\162\x64\x2f\x5f\x68\x65\x61\x64\145\x72\56\x70\150\160", $data); goto BI1Ni; nW8Qc: } public function save() { goto ONK18; jxG9Y: $data = ["\163\164\141\x74\x75\163" => false, "\145\162\x72\157\x72\x73" => ["\155\141\x70\x65\x6c\x5f\151\144" => form_error("\x6d\141\x70\x65\154\137\x69\144"), "\x6a\165\162\x75\x73\x61\x6e\137\151\144\133\x5d" => form_error("\152\x75\162\x75\x73\141\156\137\x69\x64\133\135")]]; goto T20Mf; br56z: m0J89: goto qQsOT; ONK18: $method = $this->input->post("\x6d\x65\164\x68\157\x64", true); goto bmA2Z; dRhHf: $this->form_validation->set_rules("\x6a\165\162\x75\x73\141\156\137\151\x64\x5b\x5d", "\x4a\165\x72\x75\163\x61\156", "\x72\x65\x71\x75\x69\162\145\144"); goto Vk4pV; pvn4Z: BMCRL: goto HSGBJ; ma0jM: $action = $this->master->create("\x6a\165\x72\165\x73\x61\156\x5f\x6d\141\x70\145\154", $input, true); goto br56z; pOaA6: roKb0: goto vAp79; Vk4pV: if ($this->form_validation->run() == FALSE) { goto fGd8O; } goto z404M; DFUjZ: goto BMCRL; goto re99T; T20Mf: $this->output_json($data); goto pvn4Z; ZUfMz: if (!($method === "\145\x64\151\164")) { goto m0J89; } goto nTZOi; z404M: $mapel_id = $this->input->post("\x6d\x61\160\145\x6c\x5f\x69\x64", true); goto ucxJI; ucxJI: $jurusan_id = $this->input->post("\x6a\x75\162\165\163\x61\x6e\137\x69\x64", true); goto nA6M9; re99T: fGd8O: goto jxG9Y; GlAvi: foreach ($jurusan_id as $key => $val) { $input[] = ["\x6d\141\160\x65\154\x5f\151\x64" => $mapel_id, "\x6a\x75\162\x75\163\141\x6e\137\151\x64" => $val]; ALroS: } goto pOaA6; nTZOi: $id = $this->input->post("\x6d\141\x70\145\154\137\x69\x64", true); goto CdfkO; CdfkO: $this->master->delete("\x6a\165\162\165\x73\x61\x6e\137\x6d\x61\x70\x65\154", $id, "\x6d\141\160\145\x6c\137\x69\144"); goto ma0jM; nA6M9: $input = []; goto GlAvi; HSGBJ: $this->output_json($data); goto rGfcz; vAp79: if ($method === "\x61\144\144") { goto K3KJA; } goto ZUfMz; IC10E: QgAhL: goto ftlcx; QnEKZ: K3KJA: goto ddDMb; bmA2Z: $this->form_validation->set_rules("\155\141\160\145\x6c\x5f\151\144", "\x4d\x61\x74\141\40\113\165\x6c\x69\x61\x68", "\x72\145\161\x75\x69\162\145\144"); goto dRhHf; qQsOT: goto QgAhL; goto QnEKZ; ftlcx: $data["\163\x74\x61\164\x75\163"] = $action ? TRUE : FALSE; goto DFUjZ; ddDMb: $action = $this->master->create("\152\165\x72\x75\x73\141\x6e\137\x6d\141\x70\145\x6c", $input, true); goto IC10E; rGfcz: } public function delete() { goto sj_1A; sj_1A: $chk = $this->input->post("\x63\x68\x65\143\153\x65\144", true); goto IpVt7; WFJAG: znYsd: goto IykVl; I6WhO: LHGHj: goto ngGfE; IykVl: $this->output_json(["\163\x74\x61\x74\x75\x73" => false]); goto I6WhO; r9mPU: goto LHGHj; goto WFJAG; rf1ET: if (!$this->master->delete("\x6a\x75\162\x75\x73\141\156\x5f\x6d\x61\160\145\154", $chk, "\x6d\x61\x70\145\154\137\x69\144")) { goto sc2B5; } goto Q_ej2; jxcwo: sc2B5: goto r9mPU; IpVt7: if (!$chk) { goto znYsd; } goto rf1ET; Q_ej2: $this->output_json(["\x73\x74\x61\x74\165\x73" => true, "\164\x6f\x74\141\x6c" => count($chk)]); goto jxcwo; ngGfE: } }
