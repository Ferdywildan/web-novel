<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'admin') {
            redirect(base_url());
        }
    }

    public function index()
    {
        $query = $this->db->query("SELECT MAX(no_reg) as no_reg from member");
        $hasil = $query->row();
        $nourut = substr($hasil->no_reg, 3, 3);
        $no_reg = (int)$nourut + 1;
        $no_reg = "REG" . sprintf("%03s", $no_reg);

        $data = [
            'title'    => 'Member',
            'member'    => $this->db->get('member')->result_array(),
            'no_reg'   => $no_reg,
        ];
        $this->template->load('admin/template', 'admin/member/index', $data);
    }

    public function add()
    {
        if (isset($_POST)) {

            $data = [
                'no_reg'        => $this->input->post('no_reg'),
                'nama_member'    => $this->input->post('nama_member'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            if ($this->db->insert('member', $data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Registrasi!<br>No Registrasi anda adalah <strong>' . $no_reg . '</strong>. Silahkan catat dan gunakan untuk login.</div>');
                redirect('/member');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gagal Registrasi!.</div>');
                redirect('/member');
            }
        }
    }

    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $data = [
                'nama_member'    => $this->input->post('nama_member'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            ];
            if ($this->input->post('password') !== '') {
                $data['password'] =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }
            if ($this->db->update('member', $data, ['id' => $id])) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Ubah Data!</div>');
                redirect('/member');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Ubah Data!</div>');
                redirect('/member');
            }
        } else {
            redirect('/member');
        }
    }

    public function getdata($id)
    {
        $data = $this->db->get_where('member', ['id' => $id])->row_array();
        echo json_encode($data);
    }

    public function delete($id)
    {
        if ($this->db->delete('member', ['id' => $id])) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Data!</div>');
            redirect('/member');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"Maaf, gagal hapus data!</div>');
            redirect('/member');
        }
    }
}
