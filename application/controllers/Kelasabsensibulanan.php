<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensibulanan extends CI_Controller { public function __construct() { goto Nkdw8; i8zR6: $this->load->model("\113\x65\x6c\x61\163\x5f\x6d\x6f\144\x65\x6c", "\153\145\x6c\141\163"); goto g8olz; Nkdw8: parent::__construct(); goto JmpxN; rAQCO: show_error("\110\x61\156\x79\x61\x20\x41\144\x6d\x69\156\151\163\164\x72\x61\164\x6f\162\40\171\x61\156\x67\40\x64\x69\142\145\x72\151\40\150\x61\x6b\x20\165\156\x74\x75\x6b\40\155\145\156\x67\141\x6b\x73\145\163\x20\x68\141\x6c\x61\x6d\141\156\40\151\156\x69\x2c\x20\74\141\x20\150\162\x65\146\75\x22" . base_url("\144\x61\x73\x68\142\x6f\141\162\x64") . "\42\76\x4b\145\x6d\x62\141\154\x69\x20\x6b\x65\40\x6d\145\x6e\165\x20\x61\x77\x61\154\x3c\x2f\x61\x3e", 403, "\x41\153\x73\145\163\x20\x44\151\x62\141\x74\x61\163\x69"); goto Z8p8F; CTUju: goto Km0G3; goto TWt5y; AgLFn: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto o04d0; } goto rAQCO; Z8p8F: o04d0: goto CTUju; g8olz: $this->form_validation->set_error_delimiters('', ''); goto WxfL6; lUUIL: redirect("\x61\x75\164\150"); goto h7el5; h7el5: Km0G3: goto gYoCE; kvnJ8: $this->load->model("\x44\x72\x6f\160\144\157\x77\156\137\x6d\x6f\x64\145\x6c", "\144\x72\157\x70\144\157\167\156"); goto i8zR6; gYoCE: $this->load->library(["\x64\x61\x74\141\164\141\x62\x6c\145\x73", "\146\157\x72\x6d\137\x76\141\154\151\x64\141\164\x69\157\x6e"]); goto ff4G7; ff4G7: $this->load->model("\x4d\141\163\x74\x65\162\137\x6d\x6f\x64\x65\154", "\x6d\x61\x73\x74\x65\x72"); goto feGET; JmpxN: if (!$this->ion_auth->logged_in()) { goto F5DyN; } goto AgLFn; feGET: $this->load->model("\104\x61\x73\x68\x62\x6f\x61\162\144\x5f\155\x6f\x64\x65\154", "\x64\x61\x73\x68\142\x6f\x61\x72\144"); goto kvnJ8; TWt5y: F5DyN: goto lUUIL; WxfL6: } public function output_json($data, $encode = true) { goto mODj7; qMYHM: uKpF0: goto qfJrd; MqhbV: $data = json_encode($data); goto qMYHM; mODj7: if (!$encode) { goto uKpF0; } goto MqhbV; qfJrd: $this->output->set_content_type("\141\x70\x70\154\x69\143\141\x74\151\157\156\x2f\152\163\157\156")->set_output($data); goto fHcws; fHcws: } public function index() { goto lQKIP; GG79h: YHb2v: goto FiwOt; lQKIP: $user = $this->ion_auth->user()->row(); goto jtkGm; g03gR: nycm3: goto VF0ex; nEzkY: $data["\151\x64\137\x67\x75\x72\x75"] = $guru->id_guru; goto b1zCw; X7W7k: $arrKelas = []; goto cQcbo; ttbCp: $data["\147\x75\162\x75"] = $this->dropdown->getAllGuru(); goto xaRU7; NZ7v3: foreach ($mapel as $m) { goto ftC8v; ftC8v: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto OWJdg; OWJdg: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\151\144\137\x6b\145\154\x61\163" => $kls->kelas, "\x6e\x61\x6d\141\x5f\x6b\145\x6c\x61\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; gIz9f: } goto g47fV; SvkQ2: oYqlH: goto H5nFr; g47fV: K62YM: goto SvkQ2; H5nFr: } goto g03gR; JYO8d: $tp = $this->master->getTahunActive(); goto iH0_E; iH0_E: $smt = $this->master->getSemesterActive(); goto p0F21; tPcAL: $data["\164\160\x5f\141\143\x74\x69\166\145"] = $tp; goto LWdNt; kwMch: $this->load->view("\153\145\x6c\x61\x73\x2f\141\x62\163\x65\156\x62\165\154\x61\156\141\x6e\x2f\144\141\x74\x61"); goto I7JFL; Vl74F: $data["\x61\162\x72\x6b\x65\x6c\141\x73"] = $arrKelas; goto JxbhO; m2SXu: ugSHo: goto XjhML; GBZ9y: $this->load->view("\x6b\x65\154\141\x73\57\x61\142\x73\x65\156\142\x75\154\x61\156\x61\156\57\144\x61\164\141"); goto Uml9e; xaRU7: $data["\155\141\160\x65\x6c"] = $this->dropdown->getAllMapel(); goto W0nPx; xirz3: $data["\x73\155\164\x5f\x61\x63\164\151\166\x65"] = $smt; goto q4oDN; b1zCw: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto vXbdw; VF0ex: RwRYb: goto txevZ; vXbdw: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto nLcfT; FiwOt: GFGIW: goto FZXnU; W0nPx: $this->load->view("\137\x74\145\x6d\x70\154\x61\164\145\x73\57\x64\x61\163\x68\x62\x6f\x61\162\x64\x2f\x5f\x68\x65\x61\144\145\162", $data); goto GBZ9y; FZXnU: $data["\x6d\x61\160\145\154"] = $arrMapel; goto Vl74F; I7JFL: $this->load->view("\x6d\145\x6d\142\x65\162\x73\57\x67\165\x72\165\x2f\x74\x65\x6d\x70\154\141\x74\x65\x73\x2f\146\x6f\157\x74\x65\162"); goto gs6u_; dZ3Nt: Jt2gc: goto uoW3y; JxbhO: $data["\x6b\145\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto HS0hM; VQm0m: if ($this->ion_auth->is_admin()) { goto Jt2gc; } goto ojKkg; NIUr3: $nguru[$guru->id_guru] = $guru->nama_guru; goto mVRYM; HS0hM: $this->load->view("\155\x65\x6d\142\x65\162\163\x2f\x67\x75\x72\165\57\x74\145\155\160\x6c\x61\x74\145\163\x2f\150\x65\141\x64\x65\x72", $data); goto kwMch; mVRYM: $data["\x67\x75\162\x75"] = $guru; goto nEzkY; jMDaM: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); CYcQn: } goto GG79h; gs6u_: goto ugSHo; goto dZ3Nt; q4oDN: $data["\142\x75\x6c\x61\156"] = $this->dropdown->getBulan(); goto VQm0m; Uml9e: $this->load->view("\137\x74\145\155\160\154\141\x74\145\163\57\144\x61\x73\x68\142\157\141\x72\x64\57\137\146\x6f\157\x74\x65\x72"); goto m2SXu; nLcfT: $arrMapel = []; goto X7W7k; iKAwN: if (!($mapel != null)) { goto GFGIW; } goto jMDaM; cQcbo: if (!($mapel != null)) { goto RwRYb; } goto NZ7v3; txevZ: $arrId = []; goto iKAwN; uoW3y: $data["\160\162\x6f\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto yAfln; p0F21: $data["\164\160"] = $this->dashboard->getTahun(); goto tPcAL; jtkGm: $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\x75\154" => "\104\x61\146\x74\141\162\40\x48\x61\144\151\162\40\102\165\154\141\156\141\156", "\x73\165\142\152\165\x64\x75\154" => "\x44\x61\x66\x74\141\162\x20\x48\141\144\x69\x72\40\x42\x75\154\x61\x6e\141\156\40\123\151\163\x77\x61", "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto JYO8d; yAfln: $data["\x6b\x65\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto ttbCp; LWdNt: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto xirz3; ojKkg: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto NIUr3; XjhML: } public function loadAbsensiMapel() { goto awO5d; gA2le: if (!($i < $tgl)) { goto pgMss; } goto PR0Is; hbLum: FVhAw: goto O0kEn; V1cbJ: $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt); goto huoUz; ZJ8xk: $this->output_json(["\x6a\141\144\167\141\154" => $jadwal]); goto ned_C; paRJ_: if ($jadwal != null) { goto uCtqq; } goto ZJ8xk; TIvqn: $id_tp = $this->master->getTahunActive()->id_tp; goto kldrC; JwNmA: wfbSH: goto gA2le; AdbvU: $tahun = $this->input->post("\x74\x68\156", true); goto mpnff; kldrC: $id_smt = $this->master->getSemesterActive()->id_smt; goto IopRb; tx4WY: $log = []; goto GKuZK; mpnff: $bulan = $this->input->post("\142\154\156", true); goto TIvqn; ELe9p: goto wfbSH; goto LujZI; btICS: $mapel_bulan_ini = []; goto V1cbJ; O0kEn: $i++; goto ELe9p; CBk6k: $b = $bulan < 10 ? "\60" . $bulan : $bulan; goto s3FIg; jNzhw: foreach ($siswa as $s) { goto Oe5rG; tnBec: $i++; goto CiDKE; Oe5rG: $arrMateri = []; goto ArWPa; r8w6n: NBAqn: goto tnBec; ZiU01: $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\55" . $b . "\x2d" . $t] : null; goto ZGCwl; fRSDs: $log[$s->id_siswa] = ["\x6e\141\x6d\141" => $s->nama, "\156\x69\163" => $s->nis, "\x6b\x65\154\x61\x73" => $s->nama_kelas, "\155\141\164\x65\x72\151" => $arrMateri[1], "\x74\165\x67\141\163" => $arrMateri[2]]; goto vJd2Y; B55es: $b = $bulan < 10 ? "\x30" . $bulan : $bulan; goto ZiU01; eb93w: I2s_K: goto yBLj_; yBLj_: if (!($i < $tgl)) { goto uGHQb; } goto IaV2Z; uJdKM: uGHQb: goto fRSDs; ZGCwl: $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\x2d" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\55" . $t] : null; goto r8w6n; vJd2Y: bcST1: goto B9n1P; IaV2Z: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto B55es; CiDKE: goto I2s_K; goto uJdKM; ArWPa: $i = 0; goto eb93w; B9n1P: } goto fz9T9; PR0Is: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto CBk6k; mpGpo: $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan); goto tx4WY; fz9T9: NEyeu: goto btICS; fhqit: $jadwal->istirahat = unserialize($jadwal->istirahat); goto m6PdF; s3FIg: $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $b . "\x2d" . $t, [$id_mapel]); goto hbLum; LujZI: pgMss: goto mpGpo; huoUz: foreach ($infos as $info) { goto YMwAz; qxg3W: tO7jQ: goto b1zz6; RfOmr: xkNr3: goto qxg3W; PiQ_Z: foreach ($dates as $date) { goto OPU1K; OMhD7: ufqyM: goto UZmB8; OPU1K: $d = explode("\x2d", $date); goto Rr83Y; Rr83Y: $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date; goto OMhD7; UZmB8: } goto RfOmr; YMwAz: $dates = $this->total_hari($info->id_hari, $bulan, $tahun); goto PiQ_Z; b1zz6: } goto g6vMg; GKuZK: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto jNzhw; xgCaO: TFkPn: goto NjVzi; m6PdF: $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); goto bDB43; uJsah: $id_mapel = $this->input->post("\x6d\141\160\145\154", true); goto AdbvU; ned_C: goto TFkPn; goto Diy3Z; IopRb: $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto paRJ_; awO5d: $id_kelas = $this->input->post("\x6b\145\154\141\163", true); goto uJsah; Diy3Z: uCtqq: goto fhqit; bDB43: $jadwal_materi = []; goto pWBiS; pWBiS: $i = 0; goto JwNmA; eNknP: $this->output_json(["\154\157\x67" => $log, "\x6a\x61\144\x77\x61\x6c" => $jadwal, "\x6d\x61\164\145\x72\151" => $jadwal_materi, "\155\x61\x70\x65\154\x73" => $mapel_bulan_ini]); goto xgCaO; g6vMg: j_afb: goto eNknP; NjVzi: } function total_hari($id_day, $bulan, $taun) { goto b8MRm; YnUzy: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto ErTQJ; bwgVu: if (!($i < $total_days)) { goto S3w1v; } goto L84gO; b8MRm: $days = 0; goto oRBdV; BHQ8T: goto qXgsU; goto Ypuvk; oRBdV: $dates = []; goto YnUzy; ErTQJ: $idday = $id_day == "\x37" ? 0 : $id_day; goto TUgTj; jZFuW: qXgsU: goto bwgVu; SVJdw: c122v: goto F33G0; zl0Wp: $days++; goto KoOCc; VeeU2: return $dates; goto DEIIL; L84gO: if (!(date("\x4e", strtotime($taun . "\55" . $bulan . "\x2d" . $i)) == $idday)) { goto ylPJn; } goto zl0Wp; MwKCK: ylPJn: goto SVJdw; F33G0: $i++; goto BHQ8T; TUgTj: $i = 1; goto jZFuW; Ypuvk: S3w1v: goto VeeU2; KoOCc: array_push($dates, date("\131\x2d\x6d\x2d\144", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i))); goto MwKCK; DEIIL: } }
