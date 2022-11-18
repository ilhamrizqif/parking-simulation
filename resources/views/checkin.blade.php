<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Checkin</title>
    <script src="app.js"></script>
</head>

<body>
    <div class="justify-center p-10  ">
        <div class="text-center py-5 text-5xl font-bold "> Checkin Parking System </div>
        <div class="border border-2 p-5 rounded-lg">
            <form>
                <div class="mb-6">
                    <label for="noPolisi" class="block mb-2 text-3xl font-bold text-gray-900 dark:text-white">No
                        Polisi</label>
                    <input type="noPolisi" id="noPolisi"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-5xl text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="mb-6">
                    <label for="tanggal"
                        class="block mb-2 text-3xl  text-gray-900 dark:text-white font-bold">Tanggal</label>
                    <input type="date"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-5xl text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        id="date" name="date">

                </div>
                <div class="mb-6">
                    <label for="waktu"
                        class="block mb-2 text-3xl  text-gray-900 dark:text-white font-bold">Jam</label>

                    <input type="time"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-5xl text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        id="appt" name="appt">
                </div>
                <div class="mb-6">
                    <label for="jenis" class="block mb-2 text-3xl font-bold text-gray-900 dark:text-white">Jenis
                        Kendaraan</label>
                    <input type="jenis" id="jenis"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-5xl text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="submit"
                        class="text-white text-3xl bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <button type="reset"
                        class="text-white text-3xl bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                </div>

            </form>
        </div>

    </div>

</html>
