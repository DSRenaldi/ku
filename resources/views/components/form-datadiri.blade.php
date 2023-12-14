<form action="{{ route('responden') }}" method="POST" class="max-w-lg mx-auto shadow-md p-4 rounded-lg">
  @csrf
  <div class="relative z-0 w-full mb-5 group">
      <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
      <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
      <select id="jenis_kelamin" name="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="0">Laki Laki</option>
        <option value="1">Perempuan</option>
      </select>
    </div>
    <div id="status_pendidikan" class="relative z-0 w-full mb-5 group">
      <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
      <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih status</option>
        <option value="0">Siswa SMA / SMK</option>
        <option value="1">Mahasiswa</option>
        <option value="2">Guru</option>
        <option value="3">Dosen</option>
        <option value="4">Masyarakat Umum</option>
      </select>
    </div>
    <div id="pendidikan" class="relative hidden z-0 w-full mb-5 group"></div>
    <div id="profesi" class="relative hidden z-0 w-full mb-5 group"></div>
    <div class="relative z-0 w-full mb-5 group">
      <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi </label>
      <select id="provinsi" name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Provinsi</option>
      </select>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kab / Kota </label>
      <select id="kota" name="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Kab / Kota</option>
      </select>
  </div>
  </div>
  <div class="flex justify-center items-center w-full">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lanjutkan</button>
  </div>
</form>

@push('script')
    <script>

      const pendidikan = `
      <label for="pendidikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
      <select id="Pendidikan" name="pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Pendidikan</option>
        <option value="0">SD/ SMP</option>
        <option value="1">SMA / SMK</option>
        <option value="2">Diploma / Sarjana</option>
        <option value="3">Magister(S2/S3)</option>
      </select>`
      const profesi = `
      <label for="profesi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesi</label>
      <select id="profesi" name="profesi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Profesi</option>
        <option value="0">SD/ SMP</option>
        <option value="1">SMA / SMK</option>
        <option value="2">Diploma / Sarjana</option>
        <option value="3">Magister(S2/S3)</option>
      </select>`

      $.ajax({
        url: '{{ route('utility.area.province') }}',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          $('#provinsi').empty();
          $('#provinsi').append('<option selected>Pilih Provinsi</option>');
          $.each(response, function(key, value) {
            $('#provinsi').append('<option value="' + key + '">' + value + '</option>');
          })
        },
        error: function(error) {
          console.log(error);
        }
      })

      $('#provinsi').on('change', function() {
        var provinsi = $(this).val();
        $.ajax({
          url: '{{ route('utility.area.city') }}',
          type: 'GET',
          dataType: 'json',
          data: {id: provinsi},
          success: function(response) {
            $('#kota').empty();
            $('#kota').append('<option selected>Pilih Kota</option>');
            $.each(response, function(key, value) {
              $('#kota').append('<option value="' + key + '">' + value + '</option>');
            })
          },
          error: function(error) {
            console.log(error);
          }
        })
      })

      $('#status').on('change', function() {
        var status = $(this).val();
        if(status == 4) {
          $('#pendidikan').empty();
          $('#profesi').empty();
          $('#profesi').removeClass('hidden');
          $('#pendidikan').removeClass('hidden');
          $('#pendidikan').append(pendidikan);
          $('#profesi').append(profesi);
        }
        else {
          $('#pendidikan').empty();
          $('#profesi').empty();
          $('#pendidikan').addClass('hidden');
          $('#profesi').addClass('hidden');
        }
      })
    </script>
@endpush
