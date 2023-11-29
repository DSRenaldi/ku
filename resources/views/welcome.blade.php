@extends('layouts.main')

@section('content')


    <h1 id="info" class="flex flex-row justify-center text-[35px] mt-[10px]">Data Diri Responden</h1>
    @if (session('succes'))
        <div>Berhasiil Survey</div>
    @endif
    <div>
        <form action="{{route('post')}}" method="POST" >
            <!-- biodata -->
            @csrf
            <div id="biodata" class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="border-3 border-slate-950 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-[#5584AD] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th align="center" scope="col" class="px-6 py-3 mx-auto">
                                Pertanyaan
                            </th>
                            <th align="center" scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody id = "table-bio" >
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Email
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <input type="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" id="email" />
                                </fieldset>
                            </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Jenis Kelamin
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="laki_laki" type="radio" name="jenis_kelamin" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="laki_laki" class="block ms-2  text-sm font-medium text-slate-950">
                                            Laki-Laki
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="perempuan" type="radio" name="jenis_kelamin" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="perempuan" class="block ms-2 text-sm font-medium text-slate-950">
                                            Perempuan
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Status
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="siswa" type="radio" name="status" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="siswa" class="block ms-2  text-sm font-medium text-slate-950">
                                            Siswa SMA/SMK
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="mahasiswa" type="radio" name="status" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="mahasiswa" class="block ms-2 text-sm font-medium text-slate-950">
                                            Mahasiswa
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="guru" type="radio" name="status" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="guru" class="block ms-2 text-sm font-medium text-slate-950">
                                            Guru
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="dosen" type="radio" name="status" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="dosen" class="block ms-2 text-sm font-medium text-slate-950">
                                            Dosen
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="masyarakat_umum" type="radio" name="status" value="4" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="masyarakat_umum" class="block ms-2 text-sm font-medium text-slate-950">
                                            Masyarakat Umum
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr id="profesi" class="bg-white hidden dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Profesi
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="pns" type="radio" name="profesi" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="pns" class="block ms-2  text-sm font-medium text-slate-950">
                                            PNS
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="swasta" type="radio" name="profesi" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="swasta" class="block ms-2 text-sm font-medium text-slate-950">
                                            Swasta
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="petani-nelayan" type="radio" name="profesi" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="petani-nelayan" class="block ms-2 text-sm font-medium text-slate-950">
                                            Petani/Nelayan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="wirausahawan" type="radio" name="profesi" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="wirausahawan" class="block ms-2 text-sm font-medium text-slate-950">
                                            Wirausahawan
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr id="pendidikan" class="bg-white hidden dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pendidikan
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="sd-smp" type="radio" name="pendidikan" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="sd-smp" class="block ms-2  text-sm font-medium text-slate-950">
                                            SD/SMP
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="sma-smk" type="radio" name="pendidikan" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="sma-smk" class="block ms-2 text-sm font-medium text-slate-950">
                                            SMA/SMK
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="diploma" type="radio" name="pendidikan" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="diploma" class="block ms-2 text-sm font-medium text-slate-950">
                                            Diploma
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="magister" type="radio" name="pendidikan" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="magister" class="block ms-2 text-sm font-medium text-slate-950">
                                            Magister (S2/S3)
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <td align="center" class="px-6 py-3">
                                    <select name="provinsi" class="text-slate-950 bg-gray-200 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" id="list-provinsi" ></select>
                            </td>

                            <td align="center" class="px-6 py-3">
                            <select name="kota" class="text-slate-950 bg-gray-200 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" id="list-kab" >
                                <option>--Pilih Kota--</option>
                            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <!-- pertanyaan -->
            <div id="list-pertanyaan" class=" hidden relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="border-3 border-slate-950 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-[#5584AD] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th align="center" scope="col" class="px-6 py-3 mx-auto">
                                Pertanyaan
                            </th>
                            <th align="center" scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1. Menurut anda, apa luaran penting bagi lulusan (SMA/SMK/Perguruan Tinggi)
                                <br>
                                yang anda harapkan [Maks. 2 pilihan]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>

                                    <div class="flex items-center mb-4">
                                        <input id="0" type="checkbox" name="pertanyaan-1" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="0" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Karakter Lulusan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="checkbox" name="pertanyaan-1" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Kompetensi Lulusan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="checkbox" name="pertanyaan-1" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Kreativitas/Produk Inovasi
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="checkbox" name="pertanyaan-1" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Prestasi Lulusan
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                2. Menurut anda, apa permasalahan pendidikan di Indonesia? [Maks. 2 pilihan]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="0" type="checkbox" name="pertanyaan-2" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="0" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Kurikulum cenderung berubah
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="checkbox" name="pertanyaan-2" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Akses pendidikan belum merata
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="checkbox" name="pertanyaan-2" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Pendidikan karakter kurang
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="checkbox" name="pertanyaan-2" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Anggaran pendidikan belum sesuai/belum<br>mencukupi
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="4" type="checkbox" name="pertanyaan-2" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Gaji guru/dosen belum layak
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="5" type="checkbox" name="pertanyaan-2" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Banyak tugas administratif untuk guru/dosen
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3. Bagaimana kepuasan anda terkait pendidikan di Indonesia saat ini? [radio button]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="0" type="radio" name="pertanyaan-3" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="0" class="block ms-2  text-sm font-medium text-slate-950">
                                            Sangat tidak puas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="radio" name="pertanyaan-3" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="1" class="block ms-2 text-sm font-medium text-slate-950">
                                            Tidak puas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="radio" name="pertanyaan-3" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="2" class="block ms-2 text-sm font-medium text-slate-950">
                                            Puas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="radio" name="pertanyaan-3" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="3" class="block ms-2 text-sm font-medium text-slate-950">
                                            Sangat puas
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4. Sosok/karakter Calon Presiden yang anda harapkan untuk kemajuan pendidikan
                            <br>
                            di Indonesia [Maks. pilih 2]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="0" type="checkbox" name="pertanyaan-4" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="0" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Jujur
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="checkbox" name="pertanyaan-4" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Kompeten
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="checkbox" name="pertanyaan-4" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Visioner
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="checkbox" name="pertanyaan-4" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Menginspirasi
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="4" type="checkbox" name="pertanyaan-4" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Cerdas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="5" type="checkbox" name="pertanyaan-4" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Adil
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="6" type="checkbox" name="pertanyaan-4" value="6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Berwawasan luas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="7" type="checkbox" name="pertanyaan-4" value="7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Berani
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="8" type="checkbox" name="pertanyaan-4" value="8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Lugas
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="9" type="checkbox" name="pertanyaan-4" value="9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Imaginatif
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5. Program kerja utama yang anda harapkan yang terkait dengan pendidikan [Maks. 2 pilihan]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="0" type="checkbox" name="pertanyaan-5" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="0" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Membangun karakter lulusan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="checkbox" name="pertanyaan-5" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Program sekolah dasar dan menengah gratis
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="checkbox" name="pertanyaan-5" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Peningkatan kesejahteraan guru dan dosen
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="checkbox" name="pertanyaan-5" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Peningkatan akses pendidikan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="4" type="checkbox" name="pertanyaan-5" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Peningkatan lapangan kerja yang sesuai<br>kompetensi lulusan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="5" type="checkbox" name="pertanyaan-5" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Akselerasi lulusan berwirausaha
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            6. Harapan anda terhadap Calon Presiden 2024 secara umum [Maks. 2 pilihan]
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="0" type="checkbox" name="pertanyaan-6" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="0" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Mengentaskan kemiskinan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="1" type="checkbox" name="pertanyaan-6" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Membangun karakter dan mental generasi muda
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="2" type="checkbox" name="pertanyaan-6" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Memberikan ketentraman
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="3" type="checkbox" name="pertanyaan-6" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Menjaga keutuhan NKRI
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="4" type="checkbox" name="pertanyaan-6" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Menjunjung tinggi hukum
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="5" type="checkbox" name="pertanyaan-6" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Menjunjung tinggi demokrasi
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="6" type="checkbox" name="pertanyaan-6" value="6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Mencerdaskan bangsa
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="7" type="checkbox" name="pertanyaan-6" value="7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Membuka lapangan kerja sesuai kebutuhan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="8" type="checkbox" name="pertanyaan-6" value="8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Mensejahterakan masyarakat
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            7. Siapa calon presiden yang anda prediksi mampu
                            <br>
                            mencapai harapan anda di bidang pendidikan?
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                <div class="flex items-center mb-4">
                                    <input id="0" type="radio" name="pertanyaan-7" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="0" class="block ms-2 text-sm font-medium text-slate-950">
                                        1. Anies Baswedan
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="1" type="radio" name="pertanyaan-7" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="1" class="block ms-2 text-sm font-medium text-slate-950">
                                        2. Prabowo Subianto
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="2" type="radio" name="pertanyaan-7" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="2" class="block ms-2 text-sm font-medium text-slate-950">
                                        3. Ganjar Pranowo
                                    </label>
                                </div>
                                </fieldset>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="text-[#5669CC] hover:text-white border border-[#5669CC] hover:bg-[#5669CC] focus:ring-4 focus:outline-none focus:ring-[#5669CC] font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-[#5669CC] dark:text-[#5669CC] dark:hover:text-white dark:hover:bg-[#5669CC] dark:focus:ring-[#5669CC]">Submit</button>
            </div>
        </form>
        <div class="flex flex=row justify-end mt-[10px]">
            <button type="button" id="home" class="text-[#5669CC] hover:text-white border border-[#5669CC] hover:bg-[#5669CC] focus:ring-4 focus:outline-none focus:ring-[#5669CC] font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-[#5669CC] dark:text-[#5669CC] dark:hover:text-white dark:hover:bg-[#5669CC] dark:focus:ring-[#5669CC]"></button>
            <button type="button" id="next" class="text-[#5669CC] hover:text-white border border-[#5669CC] hover:bg-[#5669CC] focus:ring-4 focus:outline-none focus:ring-[#5669CC] font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-[#5669CC] dark:text-[#5669CC] dark:hover:text-white dark:hover:bg-[#5669CC] dark:focus:ring-[#5669CC]">Next</button>
        </div>
    </div>

@endsection

@push('script')
    <script>
        const tambahan = `<tr id="profesi" class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Profesi
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="pns" type="radio" name="profesi" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="pns" class="block ms-2  text-sm font-medium text-slate-950">
                                            PNS
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="swasta" type="radio" name="profesi" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="swasta" class="block ms-2 text-sm font-medium text-slate-950">
                                            Swasta
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="petani-nelayan" type="radio" name="profesi" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="petani-nelayan" class="block ms-2 text-sm font-medium text-slate-950">
                                            Petani/Nelayan
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="wirausahawan" type="radio" name="profesi" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="wirausahawan" class="block ms-2 text-sm font-medium text-slate-950">
                                            Wirausahawan
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>

                        <tr id="pendidikan" class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pendidikan
                            </th>
                            <td class="px-6 py-4">
                                <fieldset>
                                    <div class="flex items-center mb-4">
                                        <input id="sd-smp" type="radio" name="pendidikan" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" checked>
                                        <label for="sd-smp" class="block ms-2  text-sm font-medium text-slate-950">
                                            SD/SMP
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="sma-smk" type="radio" name="pendidikan" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="sma-smk" class="block ms-2 text-sm font-medium text-slate-950">
                                            SMA/SMK
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="diploma" type="radio" name="pendidikan" value="2" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="diploma" class="block ms-2 text-sm font-medium text-slate-950">
                                            Diploma
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-4">
                                        <input id="magister" type="radio" name="pendidikan" value="3" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <label for="magister" class="block ms-2 text-sm font-medium text-slate-950">
                                            Magister (S2/S3)
                                        </label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>`


        $.ajax({
            url: '{{ route('utility.area.province') }}',
            type: 'GET',
            success: function(response) {
                $.each(response, function(key, value) {
                    $('#list-provinsi').append('<option value="'+key+'">'+value+'</option>')
                })
            },
            error: function(error) {
                    console.log(error)
            },
        })


        $('#list-provinsi').on('change', function() {
            $.ajax({
                url: '{{ route('utility.area.city') }}',
                type: 'GET',
                data : {
                    id : $(this).val()
                },
                success: function(response) {
                    $('#list-kab').empty()
                    $.each(response, function(key, value) {
                        $('#list-kab').append('<option class="py-2 text-sm text-gray-700 dark:text-gray-200" value="'+key+'">'+value+'</option>')
                    })
                },
                error: function(error) {
                        console.log(error)
                },
            })
        })

        $('input[name="status"').change(function() {
            let selected = $('input[name="status"]:checked').val();
            console.log(selected)
            if(selected) {
                if(selected == 4) {
                    $('#table-bio').append(tambahan)
                }
                else {
                    $('#profesi').removeClass('hidden').remove();
                    $('#pendidikan').removeClass('hidden').remove();
                    // $('#profesi').addClass('hidden');
                    // $('#pendidikan').addClass('hidden');
                }
            }
        })

        $('#next').on('click', function() {
            $('#list-pertanyaan').removeClass('hidden');
            $('#biodata').addClass('hidden');
            $('#home').text('Back')
            $('#next').text('Submit')
            $('#info').text('Kuisioner')
            $('#next').attr('type', 'submit')
        })

        $('#home').on('click', function() {
            if($('#biodata').hasClass('hidden')) {
                $('#list-pertanyaan').addClass('hidden');
                $('#biodata').removeClass('hidden');
                $('#home').text('Home');
                $('#next').text('Next')
                $('#info').text('Data Diri Responden')
                $('#next').props('type', 'button');
            }
        })

        $('#home').text('Home')

    </script>
@endpush
