<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['studentName' => 'Achmad Sidiq Herman', 'studentNim' => 'I0322001', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Aditya Agung Nugroho', 'studentNim' => 'I0322002', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Adriani Hasna Khalisha', 'studentNim' => 'I0322004', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Adz-dzikra QA.', 'studentNim' => 'I0322005', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Ahmad jangkung Islamudin', 'studentNim' => 'I0322006', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Akila Syahra Maharani', 'studentNim' => 'I0322009', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Alamsyah Riyo Saputra', 'studentNim' => 'I0322010', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Alrantisa Amiena', 'studentNim' => 'I0322012', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Ancelin Aloysia Prasetyo', 'studentNim' => 'I0322013', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Angelique Yoanita', 'studentNim' => 'I0322014', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Anggito Dwi Prihantoro', 'studentNim' => 'I0322015', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Antonius Indra Wicaksono', 'studentNim' => 'I0322016', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Audry Angelina Lubis', 'studentNim' => 'I0322018', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Aurelia Nadira Rosekania Darmawan', 'studentNim' => 'I0322019', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Ayusika Yumna Agil Nabillah', 'studentNim' => 'I0322020', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Azis Hendrawan', 'studentNim' => 'I0322021', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Berliana Nurul Azzahra', 'studentNim' => 'I0322024', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Brian Winson Jo', 'studentNim' => 'I0322025', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Chanisa Ulkarimah', 'studentNim' => 'I0322026', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Charisma Cinta', 'studentNim' => 'I0322027', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Chezava Deananta', 'studentNim' => 'I0322028', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Chilya Ulil Fitria', 'studentNim' => 'I0322029', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Danialin sh', 'studentNim' => 'I0322031', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Deanieta Adilest', 'studentNim' => 'I0322034', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Dennisa Lathifa Hardiani', 'studentNim' => 'I0322035', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Pramudhita Bagus Tri Wibowo', 'studentNim' => 'I0322098', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Riska Nadela', 'studentNim' => 'I0322107', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Risna Venanti', 'studentNim' => 'I0322108', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Rizky Indra Maulana', 'studentNim' => 'I0322112', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Sania amanati', 'studentNim' => 'I0322115', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Sonia Claudya Stepani Simanjuntak', 'studentNim' => 'I0322118', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Steven Alexander Hidayat', 'studentNim' => 'I0322119', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Tara Nur Lita', 'studentNim' => 'I0322120', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Taris Zulfania Rosyda', 'studentNim' => 'I0322121', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Tiara Vionadita Patttikawa', 'studentNim' => 'I0322123', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Tristan Edrea Adwitya', 'studentNim' => 'I0322124', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'ulaifiyah mutiara', 'studentNim' => 'I0322126', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Vincent Arif Kurniawan', 'studentNim' => 'I0322127', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Yehuda Andelta Barus', 'studentNim' => 'I0322130', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Alya Zahirah Rachmatullah', 'studentNim' => 'I0322133', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'khansa bashira pondavi', 'studentNim' => 'I0322136', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Edwin Siregar', 'studentNim' => 'I0322040', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Deo Permana Putra', 'studentNim' => 'I0322036', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Devi Maulidah Romadhona', 'studentNim' => 'I0322037', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Dimas', 'studentNim' => 'I0322038', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Diodorus', 'studentNim' => 'I0322039', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Fahrul Kharis Afandi', 'studentNim' => 'I0322041', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Fashiha', 'studentNim' => 'I0322042', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Fatihah AS', 'studentNim' => 'I0322043', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Fery Kurniawan', 'studentNim' => 'I0322044', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Fiki anreano siagian', 'studentNim' => 'I0322045', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Nidhomun', 'studentNim' => 'I0322046', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Flavia Fayyazza', 'studentNim' => 'I0322047', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Gabeta Estefan Sibarani', 'studentNim' => 'I0322048', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Gea Nada Aderangga', 'studentNim' => 'I0322049', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Ghaisan Nabiel', 'studentNim' => 'I0322050', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Haiva Putri Palmaisyah', 'studentNim' => 'I0322051', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Irviana Amanatul Mufaida', 'studentNim' => 'I0322054', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'ivan pramudya', 'studentNim' => 'I0322055', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Jagad Surya A', 'studentNim' => 'I0322056', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Jessica Thalia prasetyaningsari', 'studentNim' => 'I0322058', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Josephine Karin R Br Kaban', 'studentNim' => 'I0322059', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Karisa Arfina Ratri', 'studentNim' => 'I0322061', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Kasturia wira amariz', 'studentNim' => 'I0322062', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'katon adiluhung', 'studentNim' => 'I0322063', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'KAVITA LAILIA INA ZAHRA', 'studentNim' => 'I0322064', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'KHALIFAHTUR ALFI', 'studentNim' => 'I0322065', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Khansa Khalida Kennedy', 'studentNim' => 'I0322067', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Lodero Kalsara', 'studentNim' => 'I0322068', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Regina Arum S.R', 'studentNim' => 'I0322104', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Santiago Aghna', 'studentNim' => 'I0322116', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'YULIA', 'studentNim' => 'I0322131', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Daffa Rusydiansyah', 'studentNim' => 'I0322135', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Alif Kus Setyanto', 'studentNim' => 'I0322011', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Ariiq Rakhman Setiana', 'studentNim' => 'I0322017', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'shabrina aulia nisa', 'studentNim' => 'I0322117', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Bagus Pradita', 'studentNim' => 'I0322022', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Bagus Rakha Pramuditya', 'studentNim' => 'I0322023', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Daniel Mulasatria Damanik', 'studentNim' => 'I0322032', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Helmi Rafif', 'studentNim' => 'I0322052', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Jourdy lukiano matthew sirait', 'studentNim' => 'I0322060', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Luqman Al Hakim', 'studentNim' => 'I0322069', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Luthfi Daffa Hadi Pratama', 'studentNim' => 'I0322070', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Luthfi Kumara Jati', 'studentNim' => 'I0322071', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'M. Fachim Syauqi', 'studentNim' => 'I0322072', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Mardhiyah Nur Afiahni (Fiya)', 'studentNim' => 'I0322074', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Meliana Dela Shofiani', 'studentNim' => 'I0322075', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Miranti Sukma Dewi', 'studentNim' => 'I0322076', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Mohammad Hanif Putra Susetyo', 'studentNim' => 'I0322077', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhamad Fahriza Faadhilah', 'studentNim' => 'I0322079', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'MUHAMAD ILHAM RYAN KUSUMA', 'studentNim' => 'I0322080', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad alfan saputra', 'studentNim' => 'I0322081', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Dafa Alhakim', 'studentNim' => 'I0322082', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Daffa\'ul Haqqi Murti', 'studentNim' => 'I0322083', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Ilham Wadini', 'studentNim' => 'I0322084', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Marsanda Zarkasih', 'studentNim' => 'I0322085', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'muhammad natan yafi daffa haq', 'studentNim' => 'I0322086', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Yusuf Habibie', 'studentNim' => 'I0322087', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Mutiara Anjeli Aldrin', 'studentNim' => 'I0322089', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Nadila Zalfa Nursantika', 'studentNim' => 'I0322090', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Nadya Kartika Aptarini', 'studentNim' => 'I0322091', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Nala Fatkhuriyani', 'studentNim' => 'I0322092', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Naufal Awidha Saputra', 'studentNim' => 'I0322093', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Neerzalla Atha Nafisah', 'studentNim' => 'I0322094', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Novita Arilfa', 'studentNim' => 'I0322095', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Nurrafi Narendraji', 'studentNim' => 'I0322096', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'pradipta daniswara', 'studentNim' => 'i0322097', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'RACHMA JULIE NURAINI', 'studentNim' => 'I0322099', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Raditya Akmal Putra Isnanto', 'studentNim' => 'I0322100', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Rafif', 'studentNim' => 'I0322101', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Rafli Andreansyah', 'studentNim' => 'I0322102', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Raisa Azzahra', 'studentNim' => 'I0322103', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Rizal Hakim Azaria', 'studentNim' => 'I0322109', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'RIZKY IBNU INDRASTATA', 'studentNim' => 'I0322111', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Tiara Tyagita A', 'studentNim' => 'I0322122', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'tsamara najwa', 'studentNim' => 'i0322125', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'wildan faris ashari', 'studentNim' => 'I0322129', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Zaki Faiz Dzulfahmi', 'studentNim' => 'I0322132', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Muhammad Hafizh Fatihurrizqi', 'studentNim' => 'I0322137', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'Salsabila Zabrina Apsari', 'studentNim' => 'I0322114', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
            ['studentName' => 'RESYA FALISHA', 'studentNim' => 'I0322105', 'studentProdi' => 'Teknik Industri', 'studentSKS' => '90', 'studentSemester' => '4'],
        ];

        foreach ($students as $student) {
            Students::create($student);
        }
    }
}
