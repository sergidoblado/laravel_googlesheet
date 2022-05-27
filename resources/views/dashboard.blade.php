<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Formulari Personal</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="https://sheetdb.io/api/v1/0dhak5u481f5w" method="POST" id="sheetdb-form">
                         Name: <input name="data[name]">
                         Email: <input name="data[email]">
	                     Comentari:  <input name="data[comentari]">
                            <button type="submit">Submit</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
                <script>
                    var form = document.getElementById('sheetdb-form');
                         form.addEventListener("submit", e => {
                            e.preventDefault();
                        fetch(form.action, {
                            method : "POST",
                            body: new FormData(document.getElementById("sheetdb-form")),
                        }).then(
                            response => response.json()
                             ).then((html) => {
                    // you can put any JS code here
                         alert('success')
                             });
                         });
                </script>

</x-app-layout>


   
