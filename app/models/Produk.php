<?php
class Produk {
    private $conn;
    private $table = "Produk";

    public $id;
    public $nama;
    public $harga;
    public $gambar;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert() {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nama,harga,gambar) VALUES (?,?,?)");
        return $stmt->execute([$this->nama,$this->harga,$this->gambar]);
    }

    public function update() {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET nama=?, harga=?, gambar=? WHERE id=?");
        return $stmt->execute([$this->nama,$this->harga,$this->gambar,$this->id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id=?");
        return $stmt->execute([$id]);
    }
}
