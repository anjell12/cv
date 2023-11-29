@extends('layouts.index')
@section('content')
    <style>
        label {
            color: white;
        }

        .card {
            display: none;
            backdrop-filter: blur(15px) opacity(0.8);
            background: transparent;
            border: 2px solid rgba(257, 257, 257, 0.4);
            border-radius: 24px;
            backdrop-filter: blur(15px) opacity(0.8);
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        }

        .card-header {
            border-bottom: 2px solid rgba(257, 257, 257, 0.4);
            border-radius: 24px;
        }

        .card.active {
            display: block;
        }

        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .transparent-input {
            background-color: transparent;
            border: 1px solid #ccc;
            color: white;
            padding: 8px;
            opacity: 0.7;
        }

        .transparent-input::placeholder {
            color: white;
        }

        .transparent-select {
            background-color: transparent;
            /* Mengatur latar belakang elemen select menjadi transparan */
            border: 1px solid #ccc;
            /* Menambahkan garis batas agar terlihat */
            color: white;
            /* Mengatur warna teks pada elemen select */
            padding: 8px;
            /* Menambahkan padding agar elemen select terlihat lebih baik */
        }

        /* Style tambahan untuk menunjukkan elemen select saat dihover */
        .transparent-select:hover {
            border-color: #666;
            /* Mengubah warna garis batas saat dihover */
        }

        /* Mengatur warna teks opsi pada elemen select */
        .transparent-select option {
            color: black;
            /* Ganti dengan warna yang diinginkan untuk teks opsi */
        }

        .custom-date-input {
            background-color: transparent;
            border: 1px solid #ccc;
            color: white;
            padding: 8px;
            opacity: 0.7;
        }

        /* Style tambahan untuk menunjukkan elemen input saat dihover */
        .custom-date-input:hover {
            border-color: #666;
            /* Mengubah warna garis batas saat dihover */
        }
    </style>

    <video autoplay muted loop id="video-background">
        <source src="{{ asset('dist/video/Data_Grid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 justify-content-center d-flex">
                {{-- Profile --}}
                <div class="card w-100 active" id="card1">
                    <div class="card-header">
                        <span class="fw-bold text-light"><i class="fas fa-user-circle fa-lg text-primary"></i>
                            Profil</span>
                    </div>
                    <div class="card-body">
                        <div class="profil-container">
                            <div class="profil-item p-3 mb-3">
                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="nama">Nama:</label>
                                            <input type="text" class="form-control transparent-input" name="nama"
                                                placeholder="Contoh: John Doe">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="nama">Tanggal Lahir:</label>
                                            <input type="date" class="form-control custom-date-input" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="nama">Jenis Kelamin:</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input transparent-input" type="checkbox"
                                                    id="perempuan" value="perempuan">
                                                <label class="text-light form-check-label"
                                                    for="inlineCheckbox1">Perempuan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input transparent-input" type="checkbox"
                                                    id="laki-laki" value="laki-laki">
                                                <label class="text-light form-check-label"
                                                    for="inlineCheckbox2">Laki-laki</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="email">Email:</label>
                                            <input type="email" class="form-control transparent-input" name="email"
                                                placeholder="Contoh: john.doe@example.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="telepon">Telepon:</label>
                                            <input type="tel" class="form-control transparent-input" name="telepon"
                                                placeholder="Contoh: 081234567890">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="alamat">Alamat:</label>
                                            <textarea type="text" class="form-control transparent-input" name="alamat" cols="30" rows="4"
                                                placeholder="Contoh: Jl. ABC No. 123"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="alamat">Tentang:</label>
                                            <textarea type="text" class="form-control transparent-input" name="alamat" cols="30" rows="4"
                                                placeholder="Contoh: Saya orangnya kreatif"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pendidikan --}}
                <div class="card w-100" id="card2">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-light"><i class="fas fa-school fa-lg text-primary"></i>
                            Pendidikan</span>
                        <button title="tambah" type="button" class="btn btn-sm btn-success text-end"
                            onclick="tambahPendidikan()"><i class="fas fa-plus-square"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="pendidikan-container">
                            <div class="pendidikan-item p-3 mb-3">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="jenjang">Jenjang Pendidikan:</label>
                                            <select id="jenjang" class="form-select transparent-select"
                                                onchange="tampilkanInputanSelanjutnya(this)">
                                                <option value="" disabled selected>Pilih Jenjang
                                                </option>
                                                <option value="SD">SD Sederajat</option>
                                                <option value="SMP">SMP Sederajat</option>
                                                <option value="SMA">SMA Sederajat</option>
                                                <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="additionalFields"></div>
                                    <!-- Tambahkan kondisi untuk tombol hapus -->
                                    <button type="button" class="btn btn-sm btn-danger mt-3 d-none w-100"
                                        onclick="hapusPendidikan(this)">
                                        Delete <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Keahlian --}}
                <div class="card w-100" id="card3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-light"><i class="fas fa-tools fa-lg text-primary"></i>
                            Keahlian</span>
                        <button title="Tambah" type="button" class="btn btn-sm btn-success text-end"
                            onclick="tambahKeahlian()"><i class="fas fa-plus-square"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="keahlian-container">
                            <div class="keahlian-item p-3 mb-2">
                                <div class="col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="text-light" for="nama_keahlian">Nama Keahlian:</label>
                                        <input type="text" class="form-control transparent-input"
                                            name="nama_keahlian[]" placeholder="Contoh: Programming">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="text-light" for="nama_keahlian">Rate:</label>
                                        <div class="rating" data-rating="0">
                                            <i class="fas fa-star text-secondary" onclick="rateKeahlian(this, 1)"></i>
                                            <i class="fas fa-star text-secondary" onclick="rateKeahlian(this, 2)"></i>
                                            <i class="fas fa-star text-secondary" onclick="rateKeahlian(this, 3)"></i>
                                            <i class="fas fa-star text-secondary" onclick="rateKeahlian(this, 4)"></i>
                                            <i class="fas fa-star text-secondary" onclick="rateKeahlian(this, 5)"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-danger mt-3 d-none w-100"
                                    onclick="hapusKeahlian(this)">
                                    Hapus <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pendidikan Nn-formal --}}
                <div class="card w-100" id="card4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-light"><i class="fas fa-graduation-cap fa-lg text-primary"></i>
                            Pendidikan
                            Non-formal</span>
                        <button title="Tambah" type="button" class="btn btn-sm btn-success text-end"
                            onclick="tambahPendidikanNonFormal()"><i class="fas fa-plus-square"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="pendidikan-non-formal-container">
                            <div class="pendidikan-non-formal-item p-3 mb-2">
                                <div class="col-sm-12 mb-2">
                                    <div class="form-group">
                                        <label class="text-light" for="nama_kursus">Nama Pendidikan
                                            Non-formal:</label>
                                        <input type="text" class="form-control transparent-input" name="nama_kursus[]"
                                            placeholder="Contoh: Pelatihan Web Development">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-light" for="mulai">Mulai:</label>
                                            <input type="date" class="form-control custom-date-input" name="mulai">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-light" for="selesai">Selesai:</label>
                                            <input type="date" class="form-control custom-date-input" name="selesai">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-danger mt-3 d-none w-100"
                                    onclick="hapusPendidikanNonFormal(this)">
                                    Hapus <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pengalaman --}}
                <div class="card w-100" id="card5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-light"><i class="fas fa-briefcase fa-lg text-primary"></i>
                            Pengalaman
                            Kerja</span>
                        <button type="button" class="btn btn-sm btn-success text-end" onclick="tambahPengalaman()"><i
                                class="fas fa-plus-square"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="pengalaman-container">
                            <div class="pengalaman-item p-3 mb-3">
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label class="text-light" for="posisi">Posisi:</label>
                                        <input type="text" class="form-control transparent-input" name="posisi[]"
                                            placeholder="Contoh: Web Developer">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label class="text-light" for="perusahaan">Perusahaan:</label>
                                        <input type="text" class="form-control transparent-input" name="perusahaan[]"
                                            placeholder="Contoh: ABC Tech">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="tahun_mulai">Mulai:</label>
                                            <input type="text" class="form-control transparent-input"
                                                name="tahun_mulai[]" placeholder="Contoh: 2018">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-light" for="tahun_selesai">Selesai:</label>
                                            <input type="text" class="form-control transparent-input"
                                                name="tahun_selesai[]"
                                                placeholder="Contoh: 2021 (kosongkan jika masih berlangsung)">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-danger mt-3 d-none w-100"
                                    onclick="hapusPengalaman(this)">
                                    Delete <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 d-flex justify-content-between">
            <button class="btn btn-dark" onclick="prevCard()" id="prevBtn" disabled><i
                    class="fas fa-angle-double-left"></i> Back</button>
            <button class="btn btn-dark ml-2" onclick="nextCard()" id="nextBtn">Next <i
                    class="fas fa-angle-double-right"></i></button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Curriculum Vitae</h1>
                </div>
                <div class="modal-body" id="modalBody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal"><i
                            class="fas fa-times"></i></button>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-download"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-download"></i>
                                    PDF</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-download"></i>
                                    JPG</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-download"></i>
                                    PNG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Script Pendidikan --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Panggil fungsi sekali pada awal untuk menginisialisasi inputan
            inisialisasiFormPendidikan();
        });

        function inisialisasiFormPendidikan() {
            // Tambahkan event listener ke elemen dengan id 'jenjang'
            document.getElementById('jenjang').addEventListener('change', function() {
                tampilkanInputanSelanjutnya(this);
            });
        }

        function tambahPendidikan() {
            var pendidikanContainer = document.querySelector('.pendidikan-container');
            var clone = document.querySelector('.pendidikan-item').cloneNode(true);
            clone.classList.remove('d-none'); // Tambahkan ini untuk memastikan elemen baru terlihat
            pendidikanContainer.appendChild(clone);

            // Aktifkan tombol hapus pada elemen baru
            var buttons = clone.querySelectorAll('.btn-danger');
            buttons.forEach(button => {
                button.classList.remove('d-none');
            });

            // Inisialisasi form untuk elemen yang baru ditambahkan
            inisialisasiFormPendidikan();
        }

        function hapusPendidikan(button) {
            var pendidikanItem = button.closest('.pendidikan-item');
            pendidikanItem.parentNode.removeChild(pendidikanItem);

            // Matikan tombol hapus jika hanya ada satu elemen
            var buttons = document.querySelectorAll('.pendidikan-container .btn-danger');
            if (buttons.length === 1) {
                buttons[0].classList.add('d-none');
            }
        }

        function tampilkanInputanSelanjutnya(selectElement) {
            var selectedValue = selectElement.value;
            var additionalFieldsContainer = selectElement.closest('.pendidikan-item').querySelector('#additionalFields');

            // Hapus semua field yang ada sebelum menambahkan field baru
            while (additionalFieldsContainer.firstChild) {
                additionalFieldsContainer.removeChild(additionalFieldsContainer.firstChild);
            }

            // Check if the selected value is not empty
            if (selectedValue) {
                // Create and append additional fields based on the selected jenjang
                switch (selectedValue) {
                    case 'SD':
                        createField('Nama SD', 'text', 'universitas', 'Contoh: SD ABC', additionalFieldsContainer);
                        createField('Tahun Lulus', 'date', 'tahun', 'Contoh: 2022', additionalFieldsContainer);
                        break;
                    case 'SMP':
                        createField('Nama SMP', 'text', 'universitas', 'Contoh: SMP ABC', additionalFieldsContainer);
                        createField('Tahun Lulus', 'date', 'tahun', 'Contoh: 2022', additionalFieldsContainer);
                        break;
                    case 'SMA':
                        createField('Nama SMA', 'text', 'universitas', 'Contoh: SMA ABC', additionalFieldsContainer);
                        createField('Tahun Lulus', 'date', 'tahun', 'Contoh: 2022', additionalFieldsContainer);
                        break;
                    case 'Perguruan Tinggi':
                        createField('Nama Perguruan Tinggi', 'text', 'universitas', 'Contoh: Universitas ABC',
                            additionalFieldsContainer);
                        createField('Tahun Lulus', 'date', 'tahun', 'Contoh: 2022', additionalFieldsContainer);
                        createField('Gelar', 'text', 'gelar', 'Contoh: Sarjana Pendidikan', additionalFieldsContainer);
                        createField('Ipk', 'text', 'ipk', 'Contoh: 3.00', additionalFieldsContainer);
                        break;
                    default:
                        // Handle other cases if needed
                        break;
                }
            }

        }

        function createField(label, type, name, placeholder, container) {
            var field = document.createElement('div');
            field.className = 'col-sm-12 mb-3';
            field.innerHTML = `
            <div class="form-group">
                <label class="text-light" for="${name}">${label}:</label>
                <input type="${type}" class="form-control transparent-input" name="${name}" placeholder="${placeholder}">
            </div>
        `;
            container.appendChild(field);
        }
    </script>

    {{-- Script Pengalaman --}}
    <script>
        function tambahPengalaman() {
            var pengalamanContainer = document.querySelector('.pengalaman-container');
            var clone = document.querySelector('.pengalaman-item').cloneNode(true);
            clone.classList.remove('d-none'); // Tambahkan ini untuk memastikan elemen baru terlihat
            pengalamanContainer.appendChild(clone);

            // Aktifkan tombol hapus pada elemen baru
            var buttons = clone.querySelectorAll('.btn-danger');
            buttons.forEach(button => {
                button.classList.remove('d-none');
            });
        }

        function hapusPengalaman(button) {
            var pengalamanItem = button.closest('.pengalaman-item');
            pengalamanItem.parentNode.removeChild(pengalamanItem);

            // Matikan tombol hapus jika hanya ada satu elemen
            var buttons = document.querySelectorAll('.pengalaman-container .btn-danger');
            if (buttons.length === 1) {
                buttons[0].classList.add('d-none');
            }
        }
    </script>

    {{-- Script Keahlian --}}
    <script>
        function tambahKeahlian() {
            var keahlianContainer = document.querySelector('.keahlian-container');
            var clone = document.querySelector('.keahlian-item').cloneNode(true);
            clone.classList.remove('d-none');
            keahlianContainer.appendChild(clone);

            var buttons = clone.querySelectorAll('.btn-danger');
            buttons.forEach(button => {
                button.classList.remove('d-none');
            });
        }

        function hapusKeahlian(button) {
            var keahlianItem = button.closest('.keahlian-item');
            keahlianItem.parentNode.removeChild(keahlianItem);

            var buttons = document.querySelectorAll('.keahlian-container .btn-danger');
            if (buttons.length === 1) {
                buttons[0].classList.add('d-none');
            }
        }

        function rateKeahlian(star, rating) {
            var stars = star.parentNode.querySelectorAll('.fa-star');

            // Toggle warna bintang
            for (var i = 0; i < stars.length; i++) {
                if (i < rating) {
                    stars[i].classList.add('text-warning');
                } else {
                    stars[i].classList.remove('text-warning');
                }
            }

            // Simpan nilai rating ke atribut data-rating pada elemen parent
            star.parentNode.setAttribute('data-rating', rating);
        }
    </script>

    {{-- Script Pendidikan  Non-formal --}}
    <script>
        function tambahPendidikanNonFormal() {
            var pendidikanNonFormalContainer = document.querySelector('.pendidikan-non-formal-container');
            var clone = document.querySelector('.pendidikan-non-formal-item').cloneNode(true);
            clone.classList.remove('d-none');
            pendidikanNonFormalContainer.appendChild(clone);

            var buttons = clone.querySelectorAll('.btn-danger');
            buttons.forEach(button => {
                button.classList.remove('d-none');
            });
        }

        function hapusPendidikanNonFormal(button) {
            var pendidikanNonFormalItem = button.closest('.pendidikan-non-formal-item');
            pendidikanNonFormalItem.parentNode.removeChild(pendidikanNonFormalItem);

            var buttons = document.querySelectorAll('.pendidikan-non-formal-container .btn-danger');
            if (buttons.length === 1) {
                buttons[0].classList.add('d-none');
            }
        }
    </script>

    <script>
        // Fungsi untuk menampilkan data formulir di dalam modal
        function displayFormData() {
            var formData = {
                nama: document.querySelector('input[name="nama"]').value,
                tanggal: document.querySelector('input[name="tanggal"]').value,
                // Tambahkan field formulir lain sesuai kebutuhan
            };

            // Perbarui tubuh modal dengan data formulir
            var modalBody = document.getElementById('modalBody');
            var modalContent = '<h2>Curriculum Vitae</h2>';

            // Tambahkan data formulir ke konten modal
            modalContent += '<p><strong>Nama:</strong> ' + formData.nama + '</p>';
            modalContent += '<p><strong>Tanggal Lahir:</strong> ' + formData.tanggal + '</p>';
            // Tambahkan field formulir lain sesuai kebutuhan

            // Atur konten tubuh modal
            modalBody.innerHTML = modalContent;
        }

        // Fungsi untuk membuka modal dan menampilkan data formulir
        function openModal() {
            // Panggil fungsi untuk menampilkan data formulir
            displayFormData();

            // Buka modal
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        }
    </script>

    <script>
        let currentCard = 1;

        function showCard(cardNumber) {
            document.querySelectorAll('.card').forEach(card => {
                card.classList.remove('active');
            });

            document.getElementById(`card${cardNumber}`).classList.add('active');
        }

        function prevCard() {
            if (currentCard > 1) {
                currentCard--;
                showCard(currentCard);
                updateButtonStatus();
            }
        }

        function nextCard() {
            if (currentCard < 5) {
                currentCard++;
                showCard(currentCard);
                updateButtonStatus();
            }
        }

        function updateButtonStatus() {
            document.getElementById('prevBtn').disabled = currentCard === 1;
            document.getElementById('nextBtn').disabled = currentCard === 5;
        }

        showCard(currentCard);
        updateButtonStatus();
    </script>
@endsection
