<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjadwal extends CI_Controller { public function __construct() { goto ZiNQH; TzjfZ: XAoh6: goto YiWY8; k1IC2: if (!$this->ion_auth->logged_in()) { goto XAoh6; } goto bg5CX; ZiNQH: parent::__construct(); goto k1IC2; Ye3DX: goto oJlpS; goto TzjfZ; bL9DJ: $this->load->model("\x43\142\x74\x5f\155\157\x64\x65\154", "\143\142\x74"); goto fU1dB; fYDj3: yB3Zi: goto Ye3DX; AZVbI: $this->load->model("\115\141\163\x74\x65\x72\137\155\x6f\x64\x65\x6c", "\x6d\141\163\x74\145\162"); goto IZjja; YxWta: show_error("\x48\x61\x6e\171\141\x20\x41\x64\x6d\151\x6e\151\163\164\x72\141\164\157\162\40\144\x61\156\x20\147\165\x72\x75\x20\171\141\156\x67\x20\x64\x69\142\145\162\151\x20\x68\x61\x6b\40\x75\156\164\x75\x6b\40\x6d\145\156\147\141\x6b\x73\x65\x73\40\x68\141\x6c\141\x6d\141\156\x20\151\x6e\151\54\40\74\141\x20\150\162\x65\146\75\42" . base_url("\x64\x61\163\x68\x62\157\x61\162\144") . "\x22\x3e\113\145\155\x62\141\154\151\40\x6b\x65\x20\x6d\145\x6e\x75\x20\x61\x77\x61\154\x3c\57\x61\x3e", 403, "\101\153\x73\x65\x73\x20\124\x65\162\154\x61\x72\x61\x6e\x67"); goto fYDj3; F3q8D: $this->load->model("\104\x72\x6f\160\x64\x6f\x77\156\x5f\155\x6f\144\x65\154", "\x64\162\157\x70\x64\x6f\167\156"); goto tkCPn; iot3Q: oJlpS: goto wwVd1; iufWn: $this->load->model("\x4b\145\154\x61\x73\x5f\155\157\x64\145\x6c", "\153\145\x6c\141\163"); goto F3q8D; fU1dB: $this->load->model("\x4c\157\x67\x5f\x6d\157\x64\x65\x6c", "\154\157\x67\x67\151\x6e\x67"); goto iufWn; bg5CX: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto yB3Zi; } goto YxWta; wwVd1: $this->load->library(["\144\141\x74\141\x74\141\142\154\x65\x73", "\x66\157\162\155\x5f\166\x61\154\x69\144\x61\164\x69\157\x6e"]); goto AZVbI; YiWY8: redirect("\141\x75\164\x68"); goto iot3Q; tkCPn: $this->form_validation->set_error_delimiters('', ''); goto L0p5l; IZjja: $this->load->model("\104\x61\163\x68\142\x6f\x61\x72\144\x5f\155\157\144\x65\154", "\x64\x61\163\150\142\157\141\x72\144"); goto bL9DJ; L0p5l: } public function output_json($data, $encode = true) { goto vsz6F; g2KVw: $data = json_encode($data); goto QouYa; GcX2c: $this->output->set_content_type("\x61\x70\160\x6c\x69\143\x61\164\151\157\x6e\57\152\163\x6f\156")->set_output($data); goto oPj9X; QouYa: w01F5: goto GcX2c; vsz6F: if (!$encode) { goto w01F5; } goto g2KVw; oPj9X: } public function index() { goto jh6vs; WAL3f: $level = $lvl == null ? "\x30" : $lvl; goto aoGg1; g8CIb: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); xyh70: } goto pD4wX; JuNax: $this->load->view("\x5f\164\x65\155\160\154\x61\164\x65\163\57\x64\x61\x73\x68\x62\157\141\162\x64\x2f\137\x66\x6f\x6f\x74\x65\162"); goto I_V3d; IvC7u: $mode = $this->input->get("\155\157\x64\x65"); goto YddIB; Fk9Vn: $data["\162\x75\141\156\x67\x73"] = $this->cbt->getAllRuang(); goto JVs2W; I_V3d: byFqZ: goto kqJTx; vwopI: $data["\x6a\x61\144\x77\141\154\163"] = $this->cbt->getAllDataJadwal($tp->id_tp, $smt->id_smt, $guru->id_guru); goto tGy2z; qX1cM: $data["\152\145\156\151\x73"] = $this->cbt->getAllJenisUjian(); goto Z1iv_; thyWH: goto byFqZ; goto wjWra; JVs2W: $data["\163\145\x73\x69\x73"] = $this->dropdown->getAllSesi(); goto qX1cM; Mx49g: $data["\x62\x61\156\x6b\x73"] = $this->cbt->getAllBankSoal($guru->id_guru); goto vwopI; KajTq: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto PNXd1; aoGg1: $user = $this->ion_auth->user()->row(); goto FapU1; HIVw1: $data["\154\x65\x76\145\154"] = $level; goto Xuk3e; UQMjh: $terpakai = $this->cbt->getJadwalTerpakai(); goto sV0ql; wjWra: iyTxt: goto SV5r_; qViEk: $this->load->view("\155\145\x6d\x62\145\x72\163\x2f\x67\165\x72\x75\57\x74\145\155\x70\154\x61\164\145\x73\x2f\x66\x6f\x6f\164\145\x72"); goto thyWH; pAMYc: $data["\152\x61\144\x77\x61\154\163"] = $this->cbt->getAllDataJadwal($tp->id_tp, $smt->id_smt); goto JIUTi; pD4wX: Pjq_L: goto eEonS; jgL5k: $this->load->view("\x63\142\x74\x2f\x6a\141\144\167\141\154\x2f\x64\141\x74\x61"); goto qViEk; FapU1: $data = ["\x75\163\145\x72" => $user, "\152\x75\x64\x75\x6c" => "\x4a\x61\x64\x77\x61\x6c\x20\x50\145\156\151\x6c\141\151\141\156", "\x73\x75\x62\152\x75\144\165\x6c" => "\120\x48\57\120\124\123\x2f\120\x41\x54\x2f\125\x53\102\113", "\163\x65\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto sZi2b; sZi2b: $tp = $this->dashboard->getTahunActive(); goto i3OMa; YddIB: $data["\155\157\x64\145"] = $mode == null ? "\61" : $mode; goto Fk9Vn; Z1iv_: $data["\152\x61\x64\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto tNMBy; eEonS: $data["\164\157\164\141\x6c\137\163\151\x73\167\141"] = $jadwal_terpakai; goto Fxkl4; h33SH: if ($this->ion_auth->is_admin()) { goto iyTxt; } goto Gy6zZ; rYzf_: $data["\154\x65\166\x65\x6c"] = $level; goto UQMjh; Fxkl4: $data["\141\x64\141\x5f\x75\x6a\151\141\156"] = $this->cbt->getDataJadwalByTgl(date("\x59\55\155\55\144")); goto h33SH; Gy6zZ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto JgopQ; EG9ZL: $this->load->view("\x5f\164\145\155\160\154\x61\x74\x65\x73\x2f\144\x61\163\x68\x62\x6f\x61\162\144\x2f\x5f\x68\x65\x61\x64\145\162", $data); goto nPVAZ; sV0ql: $jadwal_terpakai = []; goto g8CIb; i3OMa: $smt = $this->dashboard->getSemesterActive(); goto CvA_Q; BNS_H: $data["\152\x6d\154\x4d\141\x70\x65\x6c"] = []; goto rYzf_; jh6vs: $lvl = $this->input->get("\154\x65\x76\x65\x6c", true); goto WAL3f; CvA_Q: $data["\x74\x70"] = $this->dashboard->getTahun(); goto AcuR4; Xuk3e: $data["\x6a\155\154\x49\x73\164"] = []; goto BNS_H; tGy2z: $this->load->view("\x6d\x65\x6d\142\x65\162\163\x2f\x67\165\162\x75\x2f\164\145\155\x70\154\141\164\145\x73\57\150\145\141\x64\x65\162", $data); goto jgL5k; JgopQ: $nguru[$guru->id_guru] = $guru->nama_guru; goto SbSy7; SbSy7: $data["\x67\165\162\165"] = $guru; goto Mx49g; nPVAZ: $this->load->view("\x63\x62\x74\57\x6a\141\144\x77\141\154\57\x64\141\164\141"); goto JuNax; JIUTi: $data["\x62\141\156\x6b\163"] = $this->cbt->getAllBankSoal(); goto EG9ZL; AcuR4: $data["\164\x70\x5f\141\143\x74\x69\166\145"] = $tp; goto KajTq; SV5r_: $data["\x70\162\x6f\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto pAMYc; tNMBy: $data["\153\x65\154\141\163"] = $this->cbt->getKelas(); goto HIVw1; PNXd1: $data["\x73\x6d\x74\137\x61\143\164\151\166\145"] = $smt; goto IvC7u; kqJTx: } public function add($id_jadwal) { goto PAwoX; PAwoX: $enable = $this->input->get("\145\156\141\x62\x6c\x65", true); goto kg5pd; vnxCm: $this->load->view("\x6d\145\x6d\142\x65\x72\163\x2f\x67\165\x72\x75\x2f\164\x65\155\x70\x6c\141\x74\145\x73\x2f\146\157\x6f\164\145\162"); goto Girp5; ZYSmJ: iRsSE: goto WFyJC; tOdXZ: $data["\153\145\x6c\x61\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto QZ6zz; HYXma: $tp = $this->dashboard->getTahunActive(); goto C3wTX; wn1s1: $data["\x6d\141\x70\x65\x6c"] = $this->dropdown->getAllMapel(); goto VQ3OW; sk6BP: Zd0dR: goto VJSV8; Girp5: goto iRsSE; goto bSZUE; WnbzQ: $data["\x67\165\162\165"] = $guru; goto NicH7; QZ6zz: $data["\144\151\163\141\142\x6c\x65\x5f\157\160\x73\x69"] = $enable != null && $enable == 1; goto EDP4z; BsZ9T: $data["\164\x70\137\x61\143\164\x69\x76\145"] = $tp; goto S5fI6; dP8kK: goto Nq2Y9; goto p4XkQ; YaYH0: $data["\152\141\144\167\x61\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto GK0c9; kg5pd: $user = $this->ion_auth->user()->row(); goto OJSK1; S5fI6: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto vehso; vAe6d: $data["\x70\162\157\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto kNhau; kNhau: $data["\147\165\x72\165"] = $gurus; goto wn1s1; p4XkQ: k210x: goto YaYH0; C3wTX: $smt = $this->dashboard->getSemesterActive(); goto ejNhJ; UoasN: $this->load->view("\155\x65\155\142\145\x72\x73\x2f\147\x75\x72\165\x2f\x74\145\155\x70\x6c\x61\x74\x65\x73\x2f\x68\145\141\144\145\x72", $data); goto WfoSc; Fgmu7: $data["\152\x61\x64\167\141\154"] = $this->cbt->getJadwalById($id_jadwal); goto dP8kK; GK0c9: Nq2Y9: goto j2vbz; EDP4z: if ($this->ion_auth->is_admin()) { goto Yxp7x; } goto JhI5c; JhI5c: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto WnbzQ; BpZVr: $data["\162\x75\141\156\x67\163"] = $this->cbt->getAllRuang(); goto FFGRx; bSZUE: Yxp7x: goto vAe6d; FFGRx: $data["\163\x65\163\x69\x73"] = $this->dropdown->getAllSesi(); goto orkDZ; VQ3OW: $this->load->view("\137\164\145\155\x70\154\x61\x74\x65\x73\57\144\x61\163\150\142\x6f\141\162\x64\57\137\150\145\x61\x64\145\x72", $data); goto Ap3eE; ejNhJ: $data["\x74\160"] = $this->dashboard->getTahun(); goto BsZ9T; vehso: $data["\x73\155\x74\137\141\x63\164\x69\166\x65"] = $smt; goto jAjzf; orkDZ: $data["\152\x65\156\x69\x73"] = $this->cbt->getAllJenisUjian(); goto tOdXZ; mZ9rT: $arrMapel = []; goto EW9J9; EW9J9: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; wNOSe: } goto sk6BP; VJSV8: $data["\155\141\160\x65\154"] = $arrMapel; goto UoasN; j2vbz: $gurus = $this->dropdown->getAllGuru(); goto BpZVr; Ap3eE: $this->load->view("\143\x62\x74\x2f\x6a\141\144\167\x61\x6c\x2f\x61\x64\144"); goto i5TYI; jAjzf: if ($id_jadwal == 0) { goto k210x; } goto Fgmu7; i5TYI: $this->load->view("\x5f\164\145\x6d\160\154\141\164\x65\x73\x2f\x64\x61\163\x68\142\157\x61\x72\144\x2f\x5f\146\157\x6f\164\145\x72"); goto ZYSmJ; nECBd: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto mZ9rT; OJSK1: $data = ["\x75\163\x65\x72" => $user, "\x6a\165\x64\165\x6c" => $id_jadwal == 0 ? "\x54\x61\x6d\142\x61\x68\x20\x4a\141\144\x77\x61\154\x20\125\152\x69\x61\x6e" : "\x45\x64\151\164\40\112\141\144\x77\x61\x6c\40\x55\x6a\151\x61\x6e", "\x73\x75\x62\152\165\x64\165\x6c" => "\x4a\x61\144\167\x61\154", "\x73\x65\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto HYXma; WfoSc: $this->load->view("\143\142\164\57\152\x61\x64\x77\141\154\57\141\144\x64"); goto vnxCm; NicH7: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto nECBd; WFyJC: } public function getBankMapel($id_mapel) { goto hpVTx; KtEZD: $this->output_json($filtered); goto dDNTg; hpVTx: $tp = $this->dashboard->getTahunActive(); goto M0EZz; ZlvbL: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto RUZuH; Xex6f: foreach ($banks as $key => $bank) { goto v0z1Q; UAnU8: $ada4 = $num4 == (int) $bank->tampil_isian; goto qvrvS; HnYZM: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto UAnU8; v0z1Q: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto z5SR0; NFWAk: $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\62"]) : 0; goto GXXBu; lDLu9: $num4 = isset($cek_soal["\64"]) ? count($cek_soal["\64"]) : 0; goto lw0f3; z5SR0: $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\x31"]) : 0; goto NFWAk; jKQBp: yB27y: goto Hylj8; uLSLS: $filtered[$key] = $bank->bank_kode; goto iGeI5; iGeI5: gL32B: goto jKQBp; D6fJl: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto gL32B; } goto uLSLS; b9WqE: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto HnYZM; qvrvS: $ada5 = $num5 == (int) $bank->tampil_esai; goto D6fJl; kfxm6: $ada1 = $num1 == (int) $bank->tampil_pg; goto b9WqE; lw0f3: $num5 = isset($cek_soal["\65"]) ? count($cek_soal["\x35"]) : 0; goto kfxm6; GXXBu: $num3 = isset($cek_soal["\x33"]) ? count($cek_soal["\63"]) : 0; goto lDLu9; Hylj8: } goto FUnD1; FUnD1: chbnS: goto KtEZD; RUZuH: $filtered["\60"] = "\120\151\x6c\x69\x68\40\102\141\x6e\153\40\x53\157\141\x6c\x20\x3a"; goto Xex6f; M0EZz: $smt = $this->dashboard->getSemesterActive(); goto ZlvbL; dDNTg: } public function saveJadwal() { goto V5w9K; U9N_d: c62ad: goto hWGet; C2UbJ: goto I1kKv; goto U9N_d; Hy1i_: $id = $this->input->post("\x69\x64\137\152\x61\x64\167\141\154", true); goto ZUZvT; tbYA9: $this->logging->saveLog(3, "\155\145\156\141\155\142\141\150\40\152\141\x64\x77\x61\154\x20\160\145\x6c\141\x6a\141\x72\141\x6e"); goto bvcQU; ZUZvT: if (!$id) { goto F2CWr; } goto kbIoV; nrSIC: I1kKv: goto toDh3; bvcQU: sh95s: goto HRrrv; FgYee: if ($this->input->post()) { goto c62ad; } goto vJYaO; V5w9K: $tp = $this->dashboard->getTahunActive(); goto O2FXx; toDh3: $data["\x73\165\143\143\145\x73\x73"] = $status; goto Hy1i_; Ifvfp: goto sh95s; goto Tez3I; kbIoV: $this->logging->saveLog(4, "\x6d\145\156\x67\145\x64\x69\164\x20\152\x61\x64\167\x61\154\40\160\145\x6c\x61\152\x61\x72\x61\156"); goto Ifvfp; AN4dt: $status = FALSE; goto C2UbJ; FnWVN: $data["\x6d\x65\x73\163\141\147\145"] = $res ? "\112\141\144\167\141\154\40\x62\145\162\x68\141\163\x69\154\40\144\151\163\151\155\160\x61\156" : "\112\x61\144\x77\x61\154\x20\163\165\x64\141\150\40\141\144\x61"; goto NLMI1; HRrrv: $this->output_json($data); goto YKyrU; NLMI1: $status = $res; goto nrSIC; vJYaO: $data["\155\145\163\x73\141\147\x65"] = "\113\x65\163\x61\x6c\x61\150\141\156\x20\64\60\64"; goto AN4dt; hWGet: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto FnWVN; Tez3I: F2CWr: goto tbYA9; O2FXx: $smt = $this->dashboard->getSemesterActive(); goto FgYee; YKyrU: } public function deleteJadwal() { goto tq9i4; d92DK: $jadwal = $this->cbt->getJadwalById($id); goto vZul3; M59Qi: $data["\155\145\x73\163\x61\147\x65"] = "\x62\145\x72\150\x61\163\151\x6c"; goto lTSSv; vZul3: if ($terpakai && $jadwal->rekap == 0) { goto V3SMp; } goto Mor6k; RyVZo: $hapusNilaiSiswa = $this->master->delete("\143\x62\x74\x5f\x73\x6f\x61\154\x5f\163\x69\x73\x77\x61", $id, "\x69\144\137\152\141\x64\167\141\154"); goto jae3P; hm6YB: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto Y17hi; JlvvD: goto OCZAg; goto dq2Ck; xk7J9: $data["\x73\164\x61\164\x75\x73"] = false; goto deSD7; jae3P: $hapusDurasiSiswa = $this->master->delete("\143\142\164\137\x64\165\x72\x61\163\x69\x5f\163\151\163\x77\x61", $id, "\151\144\137\152\x61\144\x77\141\x6c"); goto no4YY; lTSSv: OCZAg: goto ddFr2; i1DGx: V3SMp: goto xk7J9; deSD7: $data["\155\145\163\x73\x61\x67\x65"] = "\x48\x61\x73\151\154\x20\x55\x6a\x69\x61\x6e\40\x62\145\x6c\x75\x6d\x20\x64\151\x72\145\x6b\141\x70"; goto Hbrhx; iYucm: $data["\163\164\141\164\x75\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto M59Qi; tq9i4: $id = $this->input->get("\151\x64\x5f\x6a\141\144\x77\x61\x6c", true); goto hm6YB; nWk1D: $data["\x6d\x65\163\163\141\x67\145"] = "\112\141\144\167\141\154\x20\x55\x6a\x69\141\x6e\40\x73\x65\144\141\156\147\x20\x64\151\x67\165\156\x61\x6b\141\x6e"; goto JlvvD; bGGZU: $data["\x73\x74\141\x74\x75\163"] = false; goto nWk1D; XWENB: $this->output_json($data); goto cbdNl; Mor6k: if ($this->master->delete("\x63\x62\x74\137\x6a\x61\x64\167\x61\154", $id, "\x69\144\x5f\152\x61\x64\x77\x61\x6c")) { goto gXaMz; } goto bGGZU; dq2Ck: gXaMz: goto RyVZo; Y17hi: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto zobbi; Hbrhx: UBmld: goto XWENB; no4YY: $this->logging->saveLog(5, "\155\145\x6e\147\x68\x61\160\165\x73\40\152\141\144\x77\x61\154\40\165\152\x69\141\x6e"); goto iYucm; ddFr2: goto UBmld; goto i1DGx; zobbi: $data["\163\x74\141\x74\165\x73"] = false; goto d92DK; cbdNl: } public function deleteAllJadwal() { goto W_Zpy; n5C9e: $this->output_json($data); goto wBqRT; OAAJP: $backuped = []; goto LhW9q; haiaS: idePT: goto tF7ng; jp1ig: if ($this->master->delete("\x63\142\164\x5f\152\141\x64\167\141\154", $arrId, "\151\144\x5f\152\141\x64\167\x61\x6c")) { goto YfTtG; } goto PyROw; Zypz0: $hapusDurasiSiswa = $this->master->delete("\143\x62\x74\137\x64\x75\x72\141\163\x69\137\x73\151\163\x77\x61", $arrId, "\x69\x64\x5f\152\x61\x64\167\141\x6c"); goto fumNw; OBEKu: $count_terpakai = array_count_values($digunakan); goto EkXIc; fumNw: $this->logging->saveLog(5, "\x6d\145\156\147\x68\x61\160\x75\163\x20\x6a\141\x64\x77\141\x6c\40\165\152\x69\141\156"); goto btXlY; Oj5Ca: $data["\x62\141\x63\153\165\160"] = $counts; goto n5C9e; LhW9q: $digunakan = []; goto RlKR7; tF7ng: ob_end_clean(); goto uDsa5; tCAUz: $data["\163\x74\x61\164\x75\163"] = false; goto L_kQ1; DNY_R: $data["\x6d\x65\163\x73\141\147\x65"] = "\x62\x65\162\x68\141\x73\151\x6c"; goto MsPgP; kzlEf: YfTtG: goto T4BN4; PyROw: ob_end_clean(); goto tCAUz; w02w2: WBDXU: goto OBEKu; ujpR3: yz4HH: goto Lf4rx; Z4Yzv: $data["\155\x65\x73\163\x61\147\145"] = "\x48\141\x73\151\x6c\x20\x55\x6a\x69\x61\156\x20\142\x65\x6c\x75\155\40\x64\151\x72\145\x6b\141\160"; goto ujpR3; T4BN4: $hapusNilaiSiswa = $this->master->delete("\143\142\x74\137\x73\x6f\x61\x6c\137\x73\151\163\x77\141", $arrId, "\x69\144\x5f\x6a\x61\x64\x77\x61\x6c"); goto Zypz0; MsPgP: ZgGos: goto y4xdW; SHnDR: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto OAAJP; y4xdW: goto yz4HH; goto haiaS; uDsa5: $data["\x73\x74\x61\164\165\x73"] = false; goto Z4Yzv; kQRxX: goto ZgGos; goto kzlEf; RlKR7: foreach ($jadwals as $jadwal) { goto IENc5; WN7p6: WPDIt: goto TStmH; IENc5: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto mon_Y; jBMW1: array_push($digunakan, $terpakai); goto WN7p6; mon_Y: array_push($backuped, $jadwal->rekap); goto jBMW1; TStmH: } goto w02w2; Lf4rx: $data["\x64\151\147\165\x6e\x61\153\x61\156"] = $count_terpakai; goto Oj5Ca; nt1vo: ob_start(); goto NMTN3; AnuuK: $data["\163\x74\141\164\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto DNY_R; NMTN3: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto SHnDR; W_Zpy: $arrId = json_decode($this->input->post("\x63\150\x65\x63\x6b\x65\x64", true)); goto nt1vo; L_kQ1: $data["\x6d\145\x73\x73\x61\147\x65"] = "\112\x61\144\167\x61\154\x20\x55\x6a\x69\141\156\x20\x73\x65\144\x61\156\x67\x20\x64\151\x67\x75\x6e\141\x6b\141\156"; goto kQRxX; djXEU: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto idePT; } goto jp1ig; btXlY: ob_end_clean(); goto AnuuK; EkXIc: $counts = array_count_values($backuped); goto djXEU; wBqRT: } }
