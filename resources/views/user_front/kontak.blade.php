@extends('user_front.layouts.app')

@section('konten')
    <!-- Contact Hero -->
    <section class="bg-white py-14 sm:py-16 lg:py-20 mb-3">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20">

                <!-- Hero Text -->
                <div>

                    <span class="mb-4 inline-block text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                        ITA STORE
                    </span>

                    <h1 class="text-4xl font-bold leading-tight text-gray-900 sm:text-5xl lg:text-6xl">
                        Kami siap
                        <span class="text-primary">membantu Anda.</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-base leading-7 text-gray-600 sm:text-lg">
                        Punya pertanyaan mengenai produk atau ingin mengetahui
                        informasi lebih lanjut tentang ITA STORE?
                        Hubungi kami melalui informasi yang tersedia.
                    </p>

                </div>


                <!-- Decorative Box -->
                <div class="relative hidden lg:block">

                    <div class="ml-auto flex h-80 w-80 items-center justify-center rounded-full bg-gray-100">

                        <div class="flex h-60 w-60 items-center justify-center rounded-full bg-white shadow-sm">

                            <div class="text-center">

                                <i class="fa-solid fa-store text-5xl text-primary"></i>

                                <p class="mt-4 text-xl font-bold text-gray-900">
                                    ITA STORE
                                </p>

                                <p class="mt-1 text-sm text-gray-500">
                                    Gianyar, Bali
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="absolute -bottom-2 right-10 h-20 w-20 rounded-full bg-primary/10"></div>
                    <div class="absolute -top-4 right-0 h-12 w-12 rounded-full bg-primary/20"></div>

                </div>

            </div>

        </div>
    </section>


    <!-- Contact Information -->
    <section class="bg-gray-50 py-14 sm:py-16 lg:py-20 mb-3">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Section Heading -->
            <div class="mb-10 text-center">

                <span class="text-sm font-semibold uppercase tracking-widest text-primary">
                    Informasi Kontak
                </span>

                <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Temukan Kami
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-gray-600">
                    Berikut informasi yang dapat Anda gunakan untuk
                    menghubungi atau mengunjungi ITA STORE.
                </p>

            </div>


            <!-- Contact Cards -->
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Location -->
                <div class="rounded-2xl bg-white p-7 text-center shadow-sm ring-1 ring-gray-200">

                    <div
                        class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>

                    <h3 class="mb-3 text-lg font-semibold text-gray-900">
                        Lokasi
                    </h3>

                    <p class="text-sm leading-6 text-gray-600">
                        Jl. Raya Ketewel No 28
                        <br>
                        Gianyar, Bali
                    </p>

                </div>


                <!-- Phone -->
                <div class="rounded-2xl bg-white p-7 text-center shadow-sm ring-1 ring-gray-200">

                    <div
                        class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary">
                        <i class="fa-solid fa-phone text-xl"></i>
                    </div>

                    <h3 class="mb-3 text-lg font-semibold text-gray-900">
                        Telepon
                    </h3>

                    <p class="text-sm leading-6 text-gray-600">
                        +62 812-3456-7890
                    </p>

                </div>


                <!-- Email -->
                <div class="rounded-2xl bg-white p-7 text-center shadow-sm ring-1 ring-gray-200">

                    <div
                        class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary">
                        <i class="fa-solid fa-envelope text-xl"></i>
                    </div>

                    <h3 class="mb-3 text-lg font-semibold text-gray-900">
                        Email
                    </h3>

                    <p class="break-all text-sm leading-6 text-gray-600">
                        info@itastore.com
                    </p>

                </div>


                <!-- Opening Hours -->
                <div class="rounded-2xl bg-white p-7 text-center shadow-sm ring-1 ring-gray-200">

                    <div
                        class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary">
                        <i class="fa-solid fa-clock text-xl"></i>
                    </div>

                    <h3 class="mb-3 text-lg font-semibold text-gray-900">
                        Jam Buka
                    </h3>

                    <p class="text-sm leading-6 text-gray-600">
                        Senin - Sabtu
                        <br>
                        09:00 - 21:00 WITA
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- Message Section -->
    <section class="bg-white py-14 sm:py-16 lg:py-20 mb-3">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid overflow-hidden rounded-2xl bg-gray-900 lg:grid-cols-2">

                <!-- Information -->
                <div class="p-8 sm:p-10 lg:p-14">

                    <span class="text-sm font-semibold uppercase tracking-widest text-primary">
                        Get In Touch
                    </span>

                    <h2 class="mt-3 text-3xl font-bold leading-tight text-white sm:text-4xl">
                        Punya pertanyaan?
                    </h2>

                    <p class="mt-5 max-w-lg text-base leading-7 text-gray-400">
                        Kirimkan pesan kepada kami. Sampaikan pertanyaan
                        atau kebutuhan Anda dan kami akan membantu memberikan
                        informasi yang diperlukan.
                    </p>


                    <!-- Contact Detail -->
                    <div class="mt-10 space-y-5">

                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-primary">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-white">
                                    Alamat Toko
                                </p>

                                <p class="text-sm text-gray-400">
                                    Gianyar, Bali
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-4">

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-primary">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-white">
                                    Hubungi Kami
                                </p>

                                <p class="text-sm text-gray-400">
                                    +62 812-3456-7890
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Form -->
                <div class="bg-gray-50 p-8 sm:p-10 lg:p-14">

                    <h3 class="text-2xl font-bold text-gray-900">
                        Kirim Pesan
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Isi formulir berikut untuk menghubungi kami.
                    </p>


                    <form action="#" method="POST" class="mt-7">

                        @csrf

                        <!-- Name -->
                        <div class="mb-5">

                            <label for="nama" class="mb-2 block text-sm font-medium text-gray-700">
                                Nama
                            </label>

                            <input type="text" id="nama" name="nama" placeholder="Nama lengkap"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-1 focus:ring-primary">

                        </div>


                        <!-- Email -->
                        <div class="mb-5">

                            <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <input type="email" id="email" name="email" placeholder="nama@email.com"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-1 focus:ring-primary">

                        </div>


                        <!-- Message -->
                        <div class="mb-6">

                            <label for="pesan" class="mb-2 block text-sm font-medium text-gray-700">
                                Pesan
                            </label>

                            <textarea id="pesan" name="pesan" rows="5" placeholder="Tuliskan pesan Anda..."
                                class="w-full resize-none rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"></textarea>

                        </div>


                        <button type="submit"
                            class="inline-flex items-center gap-3 rounded-full bg-primary px-7 py-3 text-sm font-semibold text-white transition hover:bg-white hover:text-primary hover:ring-1 hover:ring-primary">

                            Kirim Pesan

                            <i class="fa-solid fa-arrow-right"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
