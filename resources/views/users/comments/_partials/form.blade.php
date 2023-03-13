<div class="w-full bg-white shadow-md rounded px-8 py-6">
@csrf
  <textarea
    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus-border-black"
    name="body" id="" cols="30" rows="5" placeholder="Comentário"></textarea>
  <label for="visible">
    <input type="checkbox" name="visible" >
      Visible
  </label>
  <button type="submit"
    class="mt-1 block w-full px-3 py-2 bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400"
  >
    Enviar
  </button>
</div>

