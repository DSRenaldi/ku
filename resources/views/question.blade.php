@extends('layouts.main')
@section('content')
    <div class="w-full mt-10 grid justify-center px-3 md:px-16 mb-8">
        <h1 class="text-center text-slate-700 font-bold text-3xl mb-5">Kuisioner</h1>
        <div class="grid gap-4 justify-center items-center w-[400px] md:w-[800px]" >
          <form action="{{route('post')}}" method="POST" enctype="multipart/form-data" class="w-full" id="form" name="form" data-parsley-validate>
            @csrf
            @foreach ($pertanyaans as $pertanyaan)    
            <div class="grid grid-cols-1 gap-4 border-b p-3 justify-center md:grid-cols-2">
              <div>{{$pertanyaan->question}}</div>
              <div class="grid gap-2">
                @foreach ($pertanyaan->optionAnswer as $option)
                  <div class="pl-5">
                    @if ($pertanyaan->type == "checkbox")
                        <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="answer[{{$pertanyaan->id}}][]" value="{{$option->id}}">
                        <label>{{$option->option_answer}}</label>
                    @else    
                    <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="answer[{{$pertanyaan->id}}]" value="{{$option->id}}">
                    <label>{{$option->option_answer}}</label>
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
            @endforeach
            <input type="hidden" name="responden_id" value="{{$responden->id}}">
            <div class="flex justify-center">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5" >Submit</button>
            </div>
          </form>
        </div>
    </div>

@endsection

@push('script')
<script>
  document.addEventListener('DOMContentLoaded', function() {
      let checkboxes = document.querySelectorAll('input[type="checkbox"]');
      let maxAllowed = 2;
      let selectedCheckboxes = {};

      checkboxes.forEach(function(checkbox) {
          checkbox.addEventListener('change', function() {
              let groupId = this.name;
              let checkedCheckboxes = document.querySelectorAll(`input[type="checkbox"][name="${groupId}"]:checked`);
              
              if (checkedCheckboxes.length > maxAllowed) {
                  this.checked = false; 
                  alert('Maaf, Anda hanya bisa memilih maksimal ' + maxAllowed + ' pilihan dalam grup ini.');
              } else {
                  selectedCheckboxes[groupId] = Array.from(checkedCheckboxes).map(cb => cb.value);
              }
          });
      });
  });
</script>
@endpush
