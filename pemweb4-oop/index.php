<?php

// Kelas induk (parent class)
class Book {
    // Properties
    protected $title;
    protected $author;
    protected $publisher;
    protected $totalPages;
    protected $price;

    // Constructor
    public function __construct($title, $author, $publisher, $totalPages, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->totalPages = $totalPages;
        $this->price = $price;
    }

    // Methods
    public function getBookInfo() {
        return "Judul: {$this->title}, Penulis: {$this->author}, Penerbit: {$this->publisher}";
    }

    public function calculateReadingTime() {
        // Asumsi rata-rata membaca 1 halaman per 2 menit
        $readingTimeMinutes = $this->totalPages * 2;
        return "Estimasi waktu membaca: {$readingTimeMinutes} menit";
    }

    public function getPrice() {
        return "Harga: Rp " . number_format($this->price, 0, ',', '.');
    }
}

// Kelas turunan untuk Novel
class Novel extends Book {
    private $genre;
    private $ageRating;

    public function __construct($title, $author, $publisher, $totalPages, $price, $genre, $ageRating) {
        parent::__construct($title, $author, $publisher, $totalPages, $price);
        $this->genre = $genre;
        $this->ageRating = $ageRating;
    }

    public function getNovelInfo() {
        return parent::getBookInfo() . ", Genre: {$this->genre}, Rating Usia: {$this->ageRating}+";
    }

    // Override method parent
    public function calculateReadingTime() {
        // Novel biasanya dibaca lebih santai, 3 menit per halaman
        $readingTimeMinutes = $this->totalPages * 3;
        return "Estimasi waktu membaca novel: {$readingTimeMinutes} menit";
    }
}

// Kelas turunan untuk Textbook
class TextBook extends Book {
    private $subject;
    private $grade;
    private $hasWorkbook;

    public function __construct($title, $author, $publisher, $totalPages, $price, $subject, $grade, $hasWorkbook) {
        parent::__construct($title, $author, $publisher, $totalPages, $price);
        $this->subject = $subject;
        $this->grade = $grade;
        $this->hasWorkbook = $hasWorkbook;
    }

    public function getTextBookInfo() {
        $workbookInfo = $this->hasWorkbook ? "Tersedia" : "Tidak tersedia";
        return parent::getBookInfo() . ", Mata Pelajaran: {$this->subject}, Kelas: {$this->grade}, Buku Latihan: {$workbookInfo}";
    }

    // Method khusus untuk TextBook
    public function getStudyDuration() {
        // Estimasi durasi belajar berdasarkan jumlah halaman
        $studyHours = ceil($this->totalPages / 20); // 20 halaman per jam
        return "Rekomendasi durasi belajar: {$studyHours} jam";
    }
}

// Contoh penggunaan
echo "=== Contoh Penggunaan Program ===\n\n";

// Membuat objek Novel
$novel = new Novel(
    "Laskar Pelangi",
    "Andrea Hirata",
    "Bentang Pustaka",
    529,
    95000,
    "Drama",
    13
);

// Membuat objek TextBook
$textbook = new TextBook(
    "Matematika Dasar",
    "Dr. Budi Santoso",
    "Erlangga",
    250,
    150000,
    "Matematika",
    10,
    true
);

// Menampilkan informasi Novel
echo "INFORMASI NOVEL:\n";
echo $novel->getNovelInfo() . "\n";
echo $novel->calculateReadingTime() . "\n";
echo $novel->getPrice() . "\n\n";

// Menampilkan informasi TextBook
echo "INFORMASI BUKU PELAJARAN:\n";
echo $textbook->getTextBookInfo() . "\n";
echo $textbook->calculateReadingTime() . "\n";
echo $textbook->getStudyDuration() . "\n";
echo $textbook->getPrice() . "\n";

?>