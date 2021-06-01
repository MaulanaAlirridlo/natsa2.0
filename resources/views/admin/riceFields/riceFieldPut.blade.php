<x-app-layout title="Sawah">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Sawah
        </h2>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Sawah Add
            </h4>
            <form action="{{ route('admin.riceFields.update', $riceField) }}" method="POST" id="riceFieldPut">
                @csrf
                @method('PUT')
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Pemilik</span>
                        <select name="pemilik" id="pemilik" required autofocus
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            @foreach ($users as $user)
                                <option @if ($riceField->user_id == $user->id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Judul</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Judul" name="title" type="text" required autofocus value="{{ $riceField->title }}"/>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Harga</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Harga" name="harga" type="number" required value="{{ $riceField->harga }}"/>
                    </label>

                    <label class="block text-sm  mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Luas</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Luas" name="luas" type="number" required value="{{ $riceField->luas }}"/>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3" placeholder="Alamat" name="alamat" required>{{ $riceField->alamat }}</textarea>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3" placeholder="Deskripsi" name="deskripsi" required>{{ $riceField->deskripsi }}</textarea>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Maps</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="maps" name="maps" type="text" required value="{{ $riceField->maps }}"/>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Sertifikasi</span>
                        <select name="sertifikasi" id="sertifikasi" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            <option @if ($riceField->sertifikasi == "shm") selected @endif value="shm">SH</option>
                            <option @if ($riceField->sertifikasi == "sgb") selected @endif value="sgb">SGB</option>
                            <option @if ($riceField->sertifikasi == "adat") selected @endif value="adat">Adat</option>
                            <option @if ($riceField->sertifikasi == "lainnya") selected @endif value="lainnya">Lainnya</option>
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Tipe</span>
                        <select name="tipe" id="tipe" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            <option @if ($riceField->tipe == "jual") selected @endif value="jual">Jual</option>
                            <option @if ($riceField->tipe == "sewa") selected @endif value="sewa">Sewa</option>
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Bekas Sawah</span>
                        <select name="vestige" id="vestige" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            @foreach ($vestiges as $vestige)
                                <option @if ($riceField->vestige_id == $vestige->id) selected @endif value="{{ $vestige->id }}">{{ $vestige->vestige }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Irigasi</span>
                        <select name="irrigation" id="irrigation" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            @foreach ($irrigations as $irrigation)
                                <option @if ($riceField->irrigation_id == $irrigation->id) selected @endif value="{{ $irrigation->id }}">{{ $irrigation->irrigation }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Daerah</span>
                        <select name="region" id="region" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            @foreach ($regions as $region)
                                <option @if ($riceField->region_id == $region->id) selected @endif value="{{ $region->id }}">{{ $region->provinsi }}, {{ $region->kabupaten }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="block text-sm mt-4">
                        <span class="text-gray-700 dark:text-gray-400">Verifikasi</span>
                        <select name="verification" id="verification" required
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="">---</option>
                            @foreach ($verifications as $verification)
                                <option @if ($riceField->verification_id == $verification->id) selected @endif value="{{ $verification->id }}">{{ $verification->verification_type }}</option>
                            @endforeach
                        </select>
                    </label>

                </div>
            </form>
            
        </div>
            

        <div class="">
            <a href="{{ route('admin.riceFields') }}">
                <button
                    class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Batal
                </button>
            </a>

            <button type="submit" form="riceFieldPut"
                class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Update Sawah
            </button>

        </div>

    </div>

</x-app-layout>