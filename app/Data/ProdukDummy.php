<?php

namespace App\Data;

class ProdukDummy
{
    public static function semua(): array
    {
        return [
            [
                'id'            => 1,
                'nama'          => 'Oversized Bow Tee',
                'kategori'      => 'Women',
                'harga'         => 189.99,
                'harga_coret'   => 229.99,
                'gambar'        => 'assets/user_front/images/oversized-bow-tee.png',
                'deskripsi'     => 'Kaos oversized dengan desain bow yang stylish dan nyaman digunakan untuk gaya kasual sehari-hari.',
            ],

            [
                'id'            => 2,
                'nama'          => 'Cropped Pinstripe Shirt',
                'kategori'      => 'Women',
                'harga'         => 249.99,
                'harga_coret'   => 299.99,
                'gambar'        => 'assets/user_front/images/cropped-pinstripe-shirt.png',
                'deskripsi'     => 'Kemeja cropped dengan motif pinstripe yang memberikan kesan modern dan elegan.',
            ],

            [
                'id'            => 3,
                'nama'          => 'Star Graphic Tee',
                'kategori'      => 'Unisex',
                'harga'         => 159.99,
                'harga_coret'   => 199.99,
                'gambar'        => 'assets/user_front/images/star-graphic-tee.png',
                'deskripsi'     => 'Kaos graphic dengan desain bintang yang cocok untuk menciptakan tampilan kasual dan modern.',
            ],

            [
                'id'            => 4,
                'nama'          => 'Vintage Washed Tee',
                'kategori'      => 'Unisex',
                'harga'         => 179.99,
                'harga_coret'   => 219.99,
                'gambar'        => 'assets/user_front/images/vintage-washed-tee.png',
                'deskripsi'     => 'Kaos dengan efek washed bernuansa vintage yang memberikan karakter pada gaya sehari-hari.',
            ],

            [
                'id'            => 5,
                'nama'          => 'Relaxed Floral Shirt',
                'kategori'      => 'Women',
                'harga'         => 269.99,
                'harga_coret'   => 329.99,
                'gambar'        => 'assets/user_front/images/relaxed-floral-shirt.png',
                'deskripsi'     => 'Kemeja floral dengan potongan relaxed yang ringan dan nyaman untuk berbagai aktivitas.',
            ],

            [
                'id'            => 6,
                'nama'          => 'Washed Wide Jeans',
                'kategori'      => 'Women',
                'harga'         => 329.99,
                'harga_coret'   => 399.99,
                'gambar'        => 'assets/user_front/images/washed-wide-jeans.png',
                'deskripsi'     => 'Celana jeans wide-leg dengan efek washed yang memberikan tampilan casual dan fashionable.',
            ],

            [
                'id'            => 7,
                'nama'          => 'Classic Cargo Pants',
                'kategori'      => 'Unisex',
                'harga'         => 289.99,
                'harga_coret'   => 359.99,
                'gambar'        => 'assets/user_front/images/classic-cargo-pants.png',
                'deskripsi'     => 'Celana cargo klasik dengan banyak ruang penyimpanan dan desain yang cocok untuk gaya casual.',
            ],

            [
                'id'            => 8,
                'nama'          => 'Cream Wide Leg Pants',
                'kategori'      => 'Women',
                'harga'         => 299.99,
                'harga_coret'   => 369.99,
                'gambar'        => 'assets/user_front/images/cream-wide-leg-pants.png',
                'deskripsi'     => 'Celana wide-leg berwarna cream dengan potongan yang nyaman dan mudah dipadukan dengan berbagai outfit.',
            ],

            [
                'id'            => 9,
                'nama'          => 'Contrast Track Pants',
                'kategori'      => 'Unisex',
                'harga'         => 239.99,
                'harga_coret'   => 299.99,
                'gambar'        => 'assets/user_front/images/contrast-track-pants.png',
                'deskripsi'     => 'Track pants dengan detail garis kontras yang memberikan tampilan sporty dan modern.',
            ],

            [
                'id'            => 10,
                'nama'          => 'Utility Cargo Jeans',
                'kategori'      => 'Unisex',
                'harga'         => 379.99,
                'harga_coret'   => 449.99,
                'gambar'        => 'assets/user_front/images/utility-cargo-jeans.png',
                'deskripsi'     => 'Cargo jeans dengan desain utility yang fungsional sekaligus memberikan tampilan streetwear modern.',
            ],
        ];
    }

    public static function cari(int $id): ?array
    {
        foreach (self::semua() as $produk) {
            if ($produk['id'] === $id) {
                return $produk;
            }
        }

        return null;
    }
}
