 <?php 
    $content = (isset($_GET["page"])) ? $_GET["page"] : "";

    switch ($content) {
        case 'data_user':
            echo "<title>Data User</title>";
            require 'content/data_user.php';
            break;       
        case 'tambah_user':
            require 'form/tambah_user.php';
            break;
        case 'data_lowongan':
            echo "<title>Data Lowongan</title>";
            require 'content/data_lowongan.php';
            break;
        case 'tambah_lowongan':
            echo "<title>Tambah Lowongan</title>";
            require 'form/tambah_lowongan.php';
            break;
        case 'edit_lowongan':
            echo "<title>Edit Lowongan</title>";
            require 'form/edit_lowongan.php';
            break;
        case 'delete_lowongan':
            echo "<title>Delete Lowongan</title>";
            require 'form/delete_lowongan.php';
            break;
        case 'data_pelamar':
            echo "<title>Data Pelamar</title>";
            require 'content/data_pelamar.php';
            break;
        case 'edit_pelamar':
            echo "<title>Edit Pelamar</title>";
            require 'form/edit_pekerja.php';
            break;
         case 'delete_pelamar':
            echo "<title>Delete Pekerja</title>";
            require 'form/delete_pekerja.php';
            break;
        case 'data_faq':
            echo "<title>Data FAQ</title>";
            require 'content/data_faq.php';
            break;
        case 'tambah_faq':
            echo "<title>Tambah FAQ</title>";
            require 'form/tambah_faq.php';
            break;
        case 'edit_faq':
            echo "<title>Edit FAQ</title>";
            require 'form/edit_faq.php';
            break;
        case 'delete_faq':
             echo "<title>Delete FAQ</title>";
            require 'form/delete_faq.php';
            break;
        case 'data_contact':
            echo "<title>Data Contact</title>";
            require 'content/data_contact.php';
            break;
        case 'tambah_contact':
            echo "<title>Tambah Contact</title>";
            require 'form/tambah_contact.php';
            break;
        case 'edit_contact':
             echo "<title>Edit Contact</title>";
            require 'form/edit_contact.php';
            break;
        case 'delete_contact':
             echo "<title>Delete Contact</title>";
            require 'form/delete_contact.php';
            break;
        case 'data_pendidikan':
            echo "<title>Data Pendidikan</title>";
            require 'content/data_pendidikan.php';
            break;
        case 'tambah_pendidikan':
            echo "<title>Tambah Pendidikan</title>";
            require 'form/tambah_pendidikan.php';
            break;
        case 'edit_pendidikan':
            echo "<title>Edit Pendidikan</title>";
            require 'form/edit_pendidikan.php';
            break;
        case 'delete_pendidikan':
            echo "<title>Delete Pendidikan</title>";
            require 'form/delete_pendidikan.php';
            break;
        case 'data_keahlian':
            echo "<title>Data Keahlian</title>";
            require 'content/data_keahlian.php';
            break;
        case 'tambah_keahlian':
            echo "<title>Tambah Keahlian</title>";
            require 'form/tambah_keahlian.php';
            break;
        case 'edit_keahlian':
            echo "<title>Edit Keahlian</title>";
            require 'form/edit_keahlian.php';
            break;
        case 'delete_keahlian':
            echo "<title>Delete Keahlian</title>";
            require 'form/delete_keahlian.php';
            break;
        case 'setting':
            echo "<title>Data Setting</title>";
            require 'content/setting.php';
            break;
        case 'edit_profil':
            echo "<title>Edit Profil</title>";
            require 'form/edit_profil.php';
            break;
        case 'edit_sidebar':
            echo "<title>Edit Profil</title>";
            require 'form/edit_sidebar.php';
            break;
        default:
            echo "<title>Dashboard</title>";
            require 'content/dashboard.php';
            break;
    }
?>


