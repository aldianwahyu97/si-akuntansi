<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem extends CI_Controller {
	public function index()
	{
		$this->load->view('beranda');
	}

	public function tambahTransaksi()
	{
		$this->load->view('tambah_transaksi');
	}

	public function jurnalUmum()
	{
		$this->load->view('jurnal_umum');
	}

	public function bukuBesar()
	{
		$this->load->view('buku_besar');
	}

	public function neracaSaldo()
	{
		$this->load->view('neraca_saldo');
	}

	public function laporanLabaRugi()
	{
		$this->load->view('laporan_labarugi');
	}

	public function laporanPerubahanModal()
	{
		$this->load->view('laporan_perubahanmodal');
	}

	public function laporanNeraca()
	{
		$this->load->view('laporan_neraca');
	}
}
