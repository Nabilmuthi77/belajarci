<?php

class Siswa_model extends CI_Model
{
    public function create()
    {
        //script upload gambar ke Local + simpan nama gambar ke database
        $config['upload_path']          = 'assets/gambar';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2048';

        $this->load->library('upload', $config); //load library upload dan inisialisasi $config

        if ($this->upload->do_upload("gambar")) {
            $imageData = $this->upload->data();
            $fileName = $imageData['file_name']; //ambil nama gambar lalu ditampung ke variabel $fileName
        } else {
            //flashdata massage
            $x = $this->upload->display_errors();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong> ' . $x . ' </strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
            );
            redirect(base_url());
        }

        // CRUD => Create (insert)(untuk menyimpan data)
        $data = [
            'nama' => htmlspecialchars($this->input->post('txtnama', true)),
            'jk' => htmlspecialchars($this->input->post('rdjeniskelamin', true)),
            'nama_ayah' => htmlspecialchars($this->input->post('txtnama_ayah', true)),
            'nama_ibu' => htmlspecialchars($this->input->post('txtnama_ibu', true)),
            'alamat' => htmlspecialchars($this->input->post('txtalamat', true)),
            'gambar' => $fileName
        ]; // atau script diatas bisa ditulis seperti ini : $data = array(......);

        $this->db->insert('siswa', $data);
    }

    public function read()
    {
        // CRUD => Read (get) (untuk menampilkan seluruh data) 
        $query = $this->db->get('siswa');   // bisa langsung seperti ini  return $this->db->get('siswa')->result();
        return $query->result();
    }

    public function read_by_id($id)
    {
        // CRUD => Read (get_where) (untuk menampilkan data hanya 1 baris id) melalui parameter
        $row_query = $this->db->get_where('siswa', array('id' => $id));   // bisa langsung seperti ini  return $this->db->get('siswa')->result();
        return $row_query->row_array();
    }

    public function update($id)
    {
        //script upload gambar ke Local + simpan nama gambar ke database
        $upload_gambar = $_FILES['gambar'];
        if ($upload_gambar) {
            $config['upload_path']          = 'assets/gambar';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '2048';

            $this->load->library('upload', $config); //load library upload dan inisialisasi $config

            if ($this->upload->do_upload('gambar')) {
                $fileName = $this->upload->data('file_name');
                unlink('assets/gambar/' . $this->input->post('gambar_lama', true));
            } else {
                $fileName = $this->input->post('gambar_lama', true);
            }
        }


        // CRUD => Update (untuk mengupdate data) melalui parameter
        $data = [
            'nama' => htmlspecialchars($this->input->post('txtnama', true)),
            'jk' => htmlspecialchars($this->input->post('rdjeniskelamin', true)),
            'nama_ayah' => htmlspecialchars($this->input->post('txtnama_ayah', true)),
            'nama_ibu' => htmlspecialchars($this->input->post('txtnama_ibu', true)),
            'alamat' => htmlspecialchars($this->input->post('txtalamat', true)),
            'gambar' => $fileName
        ];

        $this->db->where('id', $id);
        return $this->db->update('siswa', $data);
    }

    public function delete($id)
    {
        // CRUD => Delete (untuk menghapus data) melalui parameter
        // dan sekaligus menghapus gambar dilokal
        $_id = $this->db->get_where('siswa', ['id' => $id])->row();
        $delete = $this->db->delete('siswa', ['id' => $id]);
        if ($delete) {
            unlink("assets/gambar/" . $_id->gambar);
        }
    }
}
