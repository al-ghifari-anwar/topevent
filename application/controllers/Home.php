<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->load->view('Theme/Header');
        $this->load->view('Home/Index');
        $this->load->view('Theme/Scripts');
    }

    public function register()
    {
        $post = $this->input->post();

        $phone_topevent = $post['phone_topevent'];

        $topeventData = [
            'name_topevent' => $post['name_topevent'],
            'address_topevent' => $post['address_topevent'],
            'phone_topevent' => $post['phone_topevent'],
            'insta_topevent' => $post['insta_topevent'],
            'tiktok_topevent' => $post['tiktok_topevent'],
            'content_topevent' => '',
            'updated_at' => date('Y-m-d'),
        ];

        $topevent = $this->db->get_where('tb_topevent', ['phone_topevent' => $phone_topevent])->row_array();

        if ($topevent) {
            $this->session->set_flashdata('failed', "Nomor anda sudah terdaftar, silahkan upload konten anda!");
            redirect('home');
        } else {
            $save = $this->db->insert('tb_topevent', $topeventData);

            if ($save) {
                $this->session->set_flashdata('success', "Berhasil mendaftar, terimakasih!");
                redirect('home');
            } else {
                $this->session->set_flashdata('failed', "Terjadi kesalahan harap coba lagi!");
                redirect('home');
            }
        }
    }

    public function send()
    {
        $post = $this->input->post();

        $phone_topevent = $post['phone_topevent'];

        $topeventData = [
            'content_topevent' => $post['content_topevent'],
        ];

        $topevent = $this->db->get_where('tb_topevent', ['phone_topevent' => $phone_topevent])->row_array();

        if ($topevent) {
            $save = $this->db->insert('tb_topevent', $topeventData);

            if ($save) {
                $this->session->set_flashdata('success', "Berhasil mengirim konten, terimakasih!");
                redirect('home');
            } else {
                $this->session->set_flashdata('failed', "Terjadi kesalahan harap coba lagi!");
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('failed', "Nomor anda belum terdaftar, silahkan daftar terlebih dahulu!");
            redirect('home');
        }
    }
}
