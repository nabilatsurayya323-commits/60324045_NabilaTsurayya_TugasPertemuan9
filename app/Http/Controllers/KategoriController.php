<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategori_list = [
        [
            'id' => 1,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 25
        ],
        [
            'id' => 2,
            'nama' => 'Database',
            'deskripsi' => 'Buku database dan SQL',
            'jumlah_buku' => 18
        ],
        [
            'id' => 3,
            'nama' => 'Networking',
            'deskripsi' => 'Buku jaringan komputer',
            'jumlah_buku' => 12
        ],
        [
            'id' => 4,
            'nama' => 'Desain',
            'deskripsi' => 'Buku desain grafis',
            'jumlah_buku' => 10
        ],
        [
            'id' => 5,
            'nama' => 'Artificial Intelligence',
            'deskripsi' => 'Buku AI dan Machine Learning',
            'jumlah_buku' => 20
        ]
    ];

    public function index()
    {
        $kategori_list = $this->kategori_list;

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = collect($this->kategori_list)->firstWhere('id', $id);

        $buku_list = [
            [
                'judul' => 'Laravel Dasar',
                'penulis' => 'Budi',
                'tahun' => 2023
            ],
            [
                'judul' => 'PHP Modern',
                'penulis' => 'Andi',
                'tahun' => 2022
            ],
            [
                'judul' => 'Bootstrap 5',
                'penulis' => 'Siti',
                'tahun' => 2021
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = collect($this->kategori_list)->filter(function ($item) use ($keyword) {
            return str_contains(strtolower($item['nama']), strtolower($keyword));
        });

        return view('kategori.search', compact('kategori_list', 'keyword'));
    }
}