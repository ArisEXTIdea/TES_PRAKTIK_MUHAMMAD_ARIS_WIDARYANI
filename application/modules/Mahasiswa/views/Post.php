<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Data Mahasiwa</title>
    </head>
    <body>
        <div class="mahasiswa-container">
            <div class="w-full p-20">
                <h1 class="text-3xl mb-5 font-bold">Tambah Data Mahasiswa</h1>
                <form action="/post-data" method="post" class="w-full">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">NIM</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nim" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Nama</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nama" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Gender</label>
                        <select name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Tempat Lahir</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tempat_lahir" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Tanggal Lahir</label>
                        <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tgl_lahir" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Agama</label>
                        <select name="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Program Studi</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="prodi" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Email</label>
                        <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">HP</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="hp" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 font-bold">Asal Sekolah</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="asal_sekolah" required>
                    </div>
                    <div>
                        <button type="submit"
                            class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 mt-5 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                        >
                            Tambah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>