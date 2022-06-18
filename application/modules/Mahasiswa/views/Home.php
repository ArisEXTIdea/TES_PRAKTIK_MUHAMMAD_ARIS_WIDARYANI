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
        <!-- component -->
        <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100 flex jsutify-between">
                        <h2 class="font-semibold text-gray-800 text-2xl">Data Mahasiswa</h2>
                    </header>
                    <div class="my-2">

                        <a href="/tambah-data"
                            class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                        >
                            Tambah Data
                        </a>
                    </div>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                    <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">No</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Nim</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Nama</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Jenis Kelamin</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">TTL</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Agama</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Program Studi</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Email</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">HP</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Asal Sekolah</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Control</div>
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <?php $numb = 1;?>
                                    <?php foreach($mahasiswa as $d): ?>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                           <?php 
                                           echo $numb;
                                           $numb++;
                                           
                                           ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['nim'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <?= $d['nama'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?php 
                                           if($d['gender'] == 0){
                                            echo 'Laki-laki';
                                           } else {
                                            echo 'Perempuan';
                                           }
                                           
                                           
                                           ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['ttl'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['agama'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['program_studi'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['email'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['hp'] ?>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                           <?= $d['asal_sekolah'] ?>
                                        </td>
                                        <td class="p-2 my-2 whitespace-nowrap">
                                        <a href="/hapus/<?= $d['nim']?>"
                                            class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                                        >
                                            Hapus
                                        </a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>