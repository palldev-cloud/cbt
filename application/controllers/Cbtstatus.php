<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtstatus extends CI_Controller { public function __construct() { goto egqrU; zVdBw: $this->form_validation->set_error_delimiters('', ''); goto N6k6T; f80vq: $this->load->library("\165\160\x6c\157\x61\144"); goto pJwdv; xJPk6: o0B8l: goto xQUXQ; fmqgF: yCJWu: goto j0EDz; xQUXQ: redirect("\141\x75\x74\x68"); goto fmqgF; pJwdv: $this->load->model("\115\141\163\164\x65\162\137\x6d\157\x64\145\154", "\155\x61\x73\x74\x65\162"); goto nquY_; nquY_: $this->load->model("\104\x61\163\x68\142\x6f\141\162\144\x5f\x6d\x6f\x64\145\154", "\x64\x61\163\150\142\157\x61\162\x64"); goto lvY1r; lvY1r: $this->load->model("\103\x62\164\x5f\155\157\x64\x65\154", "\x63\x62\x74"); goto i3zb0; i3zb0: $this->load->model("\x44\x72\x6f\x70\144\x6f\x77\x6e\x5f\155\x6f\x64\145\x6c", "\144\x72\157\160\x64\157\167\156"); goto zVdBw; iSc3E: show_error("\x48\x61\156\171\141\x20\x41\144\155\x69\156\x69\163\164\162\x61\x74\x6f\x72\x20\x79\141\x6e\147\40\x64\x69\142\145\162\151\x20\150\141\153\40\x75\x6e\164\x75\x6b\40\x6d\x65\x6e\x67\x61\x6b\x73\x65\x73\x20\x68\x61\154\x61\155\x61\x6e\x20\151\156\151\x2c\40\x3c\141\x20\x68\x72\x65\x66\x3d\42" . base_url("\144\x61\x73\150\142\x6f\x61\162\144") . "\x22\x3e\x4b\x65\155\142\x61\x6c\x69\40\153\x65\40\x6d\145\x6e\x75\x20\141\x77\141\154\74\x2f\x61\76", 403, "\101\x6b\x73\145\163\x20\x54\x65\x72\154\x61\x72\141\156\x67"); goto MHnpW; j0EDz: $this->load->library(["\144\x61\x74\x61\x74\x61\x62\x6c\145\x73", "\x66\157\162\x6d\x5f\x76\x61\154\151\x64\x61\164\151\x6f\x6e"]); goto f80vq; egqrU: parent::__construct(); goto iH9V4; MHnpW: VQslO: goto xErY2; iH9V4: if (!$this->ion_auth->logged_in()) { goto o0B8l; } goto rlbZp; rlbZp: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto VQslO; } goto iSc3E; xErY2: goto yCJWu; goto xJPk6; N6k6T: } public function output_json($data, $encode = true) { goto aeZxu; saIig: $this->output->set_content_type("\141\160\160\154\151\x63\x61\164\151\x6f\156\57\x6a\x73\157\x6e")->set_output($data); goto MOe60; aeZxu: if (!$encode) { goto wNrYl; } goto YiR2h; YiR2h: $data = json_encode($data); goto NdyAs; NdyAs: wNrYl: goto saIig; MOe60: } public function index() { goto BptpG; TPrhw: $data["\162\165\x61\x6e\147"] = $this->dropdown->getAllRuang(); goto Wpcol; Ei_VP: $this->load->view("\137\x74\x65\155\x70\x6c\x61\164\145\163\57\x64\141\163\x68\142\157\x61\x72\x64\x2f\137\x66\x6f\157\x74\145\x72"); goto nNHzl; MZ9HO: $smt = $this->dashboard->getSemesterActive(); goto uxZoX; JNdfu: $data["\x73\145\163\x69"] = $this->dropdown->getAllSesi(); goto ZidxS; m4RED: $this->load->view("\143\142\164\57\163\164\x61\164\165\x73\57\x64\x61\x74\x61"); goto DbuzQ; TipcJ: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto FYagk; Wpcol: $data["\163\x65\163\151"] = $this->dropdown->getAllSesi(); goto CNDSe; kGp6k: $data["\152\141\144\x77\x61\x6c"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto qvyDh; qvyDh: $data["\x72\165\141\x6e\147"] = $this->dropdown->getAllRuang(); goto JNdfu; aOuZq: $data["\x74\x70\x5f\x61\x63\164\151\x76\145"] = $tp; goto TipcJ; FtxND: $data["\x6a\x61\x64\x77\x61\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto TPrhw; DCNMQ: $data["\x70\162\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto FtxND; FYagk: $data["\x73\x6d\x74\137\x61\143\164\x69\166\145"] = $smt; goto Vs9Cv; CNDSe: $this->load->view("\137\164\x65\x6d\x70\154\141\164\x65\x73\x2f\144\141\x73\x68\x62\157\x61\x72\144\57\x5f\150\145\x61\144\145\162", $data); goto MJiV1; DbuzQ: $this->load->view("\x6d\145\x6d\142\x65\x72\x73\x2f\147\x75\x72\x75\57\x74\145\x6d\x70\154\141\x74\145\x73\57\x66\157\157\164\x65\162"); goto LAA3Q; MOvTL: $data["\x67\x75\162\165"] = $guru; goto kGp6k; MJiV1: $this->load->view("\143\x62\164\x2f\x73\x74\141\164\x75\163\x2f\144\x61\164\141"); goto Ei_VP; Oi4D3: $data = ["\x75\163\145\162" => $user, "\152\165\x64\x75\154" => "\123\164\141\x74\165\x73\40\125\x6a\151\141\x6e\40\x53\x69\163\x77\x61", "\163\165\142\x6a\x75\144\x75\154" => "\x53\164\x61\x74\x75\163\40\x53\x69\x73\167\141", "\x73\x65\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto VGiBP; VGiBP: $tp = $this->dashboard->getTahunActive(); goto MZ9HO; ZidxS: $this->load->view("\x6d\x65\x6d\x62\145\x72\163\x2f\x67\x75\x72\x75\57\x74\x65\155\160\x6c\x61\164\145\163\x2f\150\145\141\144\145\x72", $data); goto m4RED; LAA3Q: goto EyHCd; goto p4ytO; BptpG: $user = $this->ion_auth->user()->row(); goto Oi4D3; Vs9Cv: if ($this->ion_auth->is_admin()) { goto P5icA; } goto mT8S7; p4ytO: P5icA: goto DCNMQ; mT8S7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto MOvTL; uxZoX: $data["\x74\160"] = $this->dashboard->getTahun(); goto aOuZq; nNHzl: EyHCd: goto cqAZV; cqAZV: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function getJadwalUjianByJadwal() { goto i1PVF; g6XtZ: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\x65\x6c\141\x73\137\x69\x64"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\x6b\145\154\141\x73\x5f\151\x64"]); BLFzE: } goto SVAQ4; M9Kre: $tp = $this->dashboard->getTahunActive(); goto G8yH0; n8oCR: $kelas = unserialize($info->bank_kelas); goto Sqe0X; lgr89: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto hMTMe; Sqe0X: $kelases = []; goto g6XtZ; i1PVF: $jadwal = $this->input->get("\151\144\137\x6a\141\x64\167\x61\x6c"); goto pr_qk; hMTMe: $data["\x73\155\x74\x5f\141\x63\164\151\166\x65"] = $smt; goto n8oCR; KsgeJ: $data["\x74\160\137\x61\143\x74\x69\x76\145"] = $tp; goto lgr89; SVAQ4: W39c2: goto qeLq9; pr_qk: $info = $this->cbt->getJadwalById($jadwal); goto M9Kre; gQWCo: $data["\164\160"] = $this->dashboard->getTahun(); goto KsgeJ; qeLq9: $this->output_json($kelases); goto ue29n; G8yH0: $smt = $this->dashboard->getSemesterActive(); goto gQWCo; ue29n: } public function getJadwalUjianByKelas() { goto md3JT; XXEAl: jNncV: goto mLMfl; vwGR6: $tp = $this->dashboard->getTahunActive(); goto oBGXI; oBGXI: $smt = $this->dashboard->getSemesterActive(); goto c0ev5; c0ev5: $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt); goto CWHDs; CWHDs: $jdwl = []; goto ALjfs; ALjfs: foreach ($jadwals as $jadwal) { goto hQbkZ; RCYh3: Gzl85: goto ZOQ5Z; ZOQ5Z: Pk1i_: goto C3Wkb; hQbkZ: $kls = unserialize($jadwal->bank_kelas); goto yiusZ; yiusZ: foreach ($kls as $kl) { goto XQpda; HEsQl: $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode; goto iQS4p; iQS4p: wvu2f: goto x0629; x0629: VC9ZV: goto kCdB9; XQpda: if (!($kl["\153\145\154\141\163\x5f\x69\x64"] == $kelas)) { goto wvu2f; } goto HEsQl; kCdB9: } goto RCYh3; C3Wkb: } goto XXEAl; md3JT: $kelas = $this->input->get("\x69\144\137\153\145\154\x61\163"); goto vwGR6; mLMfl: $this->output_json($jdwl); goto r4Bsb; r4Bsb: } public function getSiswaKelas() { goto i6cRh; rWEAg: $this->db->trans_complete(); goto OoCyM; U1L2U: $data["\x64\x75\162\x61\x73\151"] = $arrDur; goto cvRpb; lrZ7v: $info = $this->cbt->getJadwalById($jadwal); goto YsEp6; i6cRh: $kelas = $this->input->get("\x6b\x65\x6c\141\x73"); goto I42bj; I42bj: $jadwal = $this->input->get("\152\141\144\167\x61\x6c"); goto sNjsU; OoCyM: $data["\x73\151\x73\167\141"] = $siswas; goto U1L2U; sNjsU: $this->db->trans_start(); goto RFiEv; YsEp6: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto d3cDr; d3cDr: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto jkKtx; Pha5x: $this->output_json($data); goto ERuMG; xRubD: $smt = $this->dashboard->getSemesterActive(); goto lrZ7v; wT4ux: $arrDur = []; goto O2ya4; O2ya4: foreach ($siswas as $siswa) { goto h62wL; nk4EQ: ZTZbI: goto FlQaZ; RWVKe: foreach ($logs as $log) { goto VF878; ieVrZ: IjTyi: goto cpP0r; VF878: if (!($log->id_siswa == $siswa->id_siswa)) { goto IjTyi; } goto keJon; keJon: array_push($log_siswa, $log); goto ieVrZ; cpP0r: k6DAU: goto zLBRR; zLBRR: } goto nk4EQ; FlQaZ: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\x6c\157\147" => $log_siswa]; goto au7qD; h62wL: $dur_siswa = null; goto L1tTp; w18p1: $log_siswa = []; goto RWVKe; L1tTp: foreach ($durasies as $durasi) { goto FBUql; gywzL: $dd = $ej . $em; goto klM5n; Wckva: $ed = $elap[2] == "\x30\x30" ? 0 : 1; goto YMKST; FBUql: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto HQpoA; } goto fDbUn; DPQuB: ZU6bY: goto QGX1Q; fDbUn: $lamanya = $durasi->lama_ujian; goto VDCt2; klM5n: $durasi->lama_ujian = $dd == '' ? "\60\40\155" : $dd; goto DPQuB; VDCt2: if (strpos($lamanya, "\x3a") !== false) { goto X8g06; } goto SaG6D; OuoFx: $elap = explode("\x3a", $lamanya); goto Wckva; oEvQY: $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\40\155"; goto gywzL; QGX1Q: $dur_siswa = $durasi; goto Uy0ze; YMKST: $ej = $elap[0] == "\x30\60" ? '' : intval($elap[0]) . "\x20\152\40"; goto oEvQY; SaG6D: $durasi->lama_ujian .= "\x6d"; goto odIc6; odIc6: goto ZU6bY; goto lixSr; xO7jR: KV1HF: goto vlSIG; Uy0ze: HQpoA: goto xO7jR; lixSr: X8g06: goto OuoFx; vlSIG: } goto Mgs73; Mgs73: TiuYK: goto w18p1; au7qD: ScnQt: goto Y8MXs; Y8MXs: } goto QrFrL; jkKtx: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto wT4ux; RFiEv: $tp = $this->dashboard->getTahunActive(); goto xRubD; QrFrL: EjeOu: goto rWEAg; cvRpb: $data["\x69\156\x66\x6f"] = $info; goto Pha5x; ERuMG: } public function getSiswaRuang() { goto imPrA; Feutw: $tp = $this->dashboard->getTahunActive(); goto EByVJ; SocPj: $data["\151\x6e\x66\x6f"] = $info; goto OkLPR; jETG1: $this->db->trans_complete(); goto JJkgu; I1pv5: foreach ($siswas as $siswa) { goto ROn7b; DjLcv: M42JN: goto iBQ0h; iBQ0h: $arrDur[$siswa->id_siswa] = ["\144\165\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . $jadwal), "\x6a\141\x77\141\142" => $arrJawab[$siswa->id_siswa], "\154\157\x67" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto u0Sco; dGgua: goto fi2uy; goto DjLcv; u0Sco: qE2qN: goto hHDMI; ROn7b: $arrJawab = []; goto H9Vsg; eXCwd: if (!($i < $info->jml_soal)) { goto M42JN; } goto Jw1Al; KFnnp: fi2uy: goto eXCwd; H9Vsg: $i = 0; goto KFnnp; WCCaU: $i++; goto dGgua; x49f8: epgKD: goto WCCaU; Jw1Al: $arrJawab[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 1 . ($i + 1)); goto x49f8; hHDMI: } goto zG8qP; qJgqM: $jadwal = $this->input->get("\x6a\x61\x64\x77\x61\154"); goto OaC_T; JJkgu: $data["\x73\x69\163\167\x61"] = $siswas; goto SBj3D; zG8qP: mbgdQ: goto jETG1; OaC_T: $this->db->trans_start(); goto Feutw; NzECF: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto UT3xb; UT3xb: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto X4F0e; EByVJ: $smt = $this->dashboard->getSemesterActive(); goto NzECF; X4F0e: $arrDur = []; goto I1pv5; EyVo2: $sesi = $this->input->get("\x73\x65\163\x69"); goto qJgqM; imPrA: $ruang = $this->input->get("\x72\165\141\156\147"); goto EyVo2; SBj3D: $data["\x64\x75\x72\141\x73\151"] = $arrDur; goto SocPj; OkLPR: $this->output_json($data); goto XMfpP; XMfpP: } public function detail() { goto o1OEr; c0Wxq: Dyasb: goto O7KNO; mTUWM: $this->load->view("\137\x74\145\x6d\x70\x6c\141\x74\145\163\x2f\144\x61\x73\150\x62\x6f\141\162\x64\57\x5f\x66\x6f\157\164\145\x72"); goto TTd0N; Jg1Uo: $data["\163\x6d\164\137\141\143\164\151\166\x65"] = $smt; goto awTj_; o1OEr: $siswa = $this->input->get("\163\x69\x73\x77\x61"); goto wzul3; Grqbi: $data["\x73\x6f\x61\154"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa); goto yFcBU; Ed292: $user = $this->ion_auth->user()->row(); goto XmIJ7; lBpIl: $smt = $this->dashboard->getSemesterActive(); goto mk6vz; mk6vz: $data["\x74\x70"] = $this->dashboard->getTahun(); goto A6e7d; awTj_: $data["\163\151\163\x77\141"] = $this->master->getSiswaById($siswa); goto Grqbi; qiMei: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto NadME; O7KNO: $data["\x70\x72\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Mwj9E; rArXL: $this->load->view("\x63\x62\164\x2f\x73\x74\141\x74\165\163\x2f\x64\145\164\141\x69\154"); goto cKiDg; INQEV: $tp = $this->dashboard->getTahunActive(); goto lBpIl; NadME: $data["\147\165\162\165"] = $guru; goto JbbAw; UcH3A: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto Jg1Uo; wzul3: $jadwal = $this->input->get("\x6a\x61\144\167\141\x6c"); goto Ed292; yFcBU: if ($this->ion_auth->is_admin()) { goto Dyasb; } goto qiMei; JbbAw: $this->load->view("\x6d\x65\155\142\x65\x72\163\x2f\147\x75\x72\x75\57\164\145\x6d\x70\x6c\x61\164\145\x73\57\150\x65\x61\x64\x65\162", $data); goto rArXL; cKiDg: $this->load->view("\x6d\x65\155\142\145\162\x73\x2f\147\x75\x72\x75\57\164\145\x6d\x70\x6c\x61\164\x65\x73\57\146\157\x6f\x74\x65\x72"); goto YxhYl; Mwj9E: $this->load->view("\x5f\164\x65\x6d\160\x6c\x61\x74\145\x73\x2f\144\141\x73\x68\x62\x6f\141\162\144\x2f\137\x68\x65\141\x64\145\x72", $data); goto d4_qS; d4_qS: $this->load->view("\143\142\164\57\x73\164\x61\164\165\x73\x2f\144\145\164\141\151\154"); goto mTUWM; XmIJ7: $data = ["\165\163\145\162" => $user, "\152\165\x64\x75\154" => "\104\x65\164\141\x69\154\x20\x53\164\x61\164\x75\163\x20\x53\x69\x73\x77\x61", "\163\165\142\x6a\165\144\x75\154" => "\x53\164\x61\x74\165\x73\40\123\x69\163\167\141", "\163\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto INQEV; A6e7d: $data["\x74\160\x5f\x61\x63\x74\151\166\145"] = $tp; goto UcH3A; YxhYl: goto qz0w0; goto c0Wxq; TTd0N: qz0w0: goto GxIsE; GxIsE: } }
