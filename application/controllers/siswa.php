<?php
class Siswa extends CI_Controller
{    
    public function index()
    {
        $this->load->view('view-form-siswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa','required', [
            'required' => 'Nama Siswa Harus diisi'
        ]);
        $this->form_validation->set_rules('nis', 'Nis Siswa','required|min_length[8]', [
            'required' => 'Nis Siswa Harus diisi',
			'min_length' => 'Nis Siswa terlalu pendek'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas Siswa','required', [
            'required' => 'Kelas Siswa Harus diisi'
        ]);
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir','required', [
            'required' => 'Tanggal Lahir Harus diisi'
        ]);
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir','required', [
            'required' => 'Tempat Lahir Harus diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Siswa','required', [
            'required' => 'Alamat Siswa Harus diisi'
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin','required', [
            'required' => 'Jenis Kelamin Harus diisi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama Siswa','required', [
            'required' => 'Agama Siswa Harus diisi'
        ]);

        

        if ($this->form_validation->run() != true) {
        $this->load->view('view-form-siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl_lhr' => $this->input->post('tgl_lhr'),
                'tmpt_lhr' => $this->input->post('tmpt_lhr'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama')
            ];

        $this->load->view('view-data-siswa', $data);
        }
    }

}
?>