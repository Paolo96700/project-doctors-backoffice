<x-app-layout>
    @section('contents')

        <section class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8" style="background-color:  rgba(242, 249, 247, 0.8);;">
                <h1 style="font-weight:700; font-size:20px">Create a new Profile</h1>
                <form 
                method="post" 
                action="{{ route('admin.doctors.store') }}" 
                enctype="multipart/form-data"  
                novalidate
                class="container flex flex-col mx-auto space-y-12"
                >
                    {{-- Per protezione dati --}}
                    @csrf 
                    {{-- Per protezione dati --}}
                    <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                        <div class="space-y-2 col-span-full lg:col-span-1">
                            <p class="font-medium">Informations</p>
                            <p class="text-xs">Put the information here to create a new profile</p>
                        </div>

                        <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                            
                            {{-- Name del dottore - Slug --}}
                            
                              <div class="col-span-full sm:col-span-3">
                                <label 
                                for="name" class="form-label" style="font-weight:700; font-size:20px">
                                    Name
                                </label>
                                <input 
                                type="text" 
                                class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900 form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name')}}">
                    
                                <div class="invalid-feedback">
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                            {{-- Telephone del dottore --}}
                
                            <div class="col-span-full sm:col-span-3">
                                <label 
                                for="telephone" class="form-label" style="font-weight:700; font-size:20px">
                                    Telephone
                                </label>
                                <input 
                                type="text" 
                                class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900 form-control @error('telephone') is-invalid @enderror" 
                                id="telephone" 
                                name="telephone" 
                                value="{{ old('telephone')}}">
                    
                                <div class="invalid-feedback">
                                    @error('telephone') {{ $message }} @enderror
                                </div>
                            </div>

                            {{-- Prestastioni del dottore --}}
                    
                            <div class="col-span-full sm:col-span-3">
                                <label for="performance" class="form-label" style="font-weight:700; font-size:20px">
                                    Performace
                                </label>
                                <input 
                                type="text" 
                                class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900 form-control @error('performance') is-invalid @enderror" 
                                id="performance" 
                                name="performance" 
                                value="{{ old('performance')}}">
                    
                                <div class="invalid-feedback">
                                    @error('performance') {{ $message }} @enderror
                                </div>
                            </div>

                          
                        </div>
                    </fieldset>
            
                    <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                        <div class="space-y-2 col-span-full lg:col-span-1">
                            <p class="font-medium">Other Informations</p>
                        </div>
                        <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                            {{-- Immagine Profilo del Dottore --}}

                            <div class="col-span-full sm:col-span-3">
                                <label for="image" class="form-label"style="font-weight:700; font-size:20px">
                                    Image
                                </label>
                                <div class="input-group mb-3">
                                    <input type="file" 
                                    class="form-control @error('image') is-invalid @enderror" 
                                    id="image" name="image" accept="image/*">
                                </div>
                                <div class="invalid-feedback">
                                    @error('image') {{ $message }} @enderror
                                </div>
                            </div>

                            {{-- Curriculum del Dottore --}}

                            <div class="col-span-full sm:col-span-3">
                                <label for="curriculum_vitae" class="form-label"style="font-weight:700; font-size:20px">
                                    Curriculum vitae
                                </label>
                                <div class="input-group mb-3">
                                    <input type="file" 
                                    class="form-control @error('curriculum_vitae') is-invalid @enderror" 
                                    id="curriculum_vitae" name="curriculum_vitae">
                                </div>
                                <div class="invalid-feedback">
                                    @error('curriculum_vitae') {{ $message }} @enderror
                                </div>
                            </div>
                            
                        </div>
                        
                    </fieldset>

                    <div class="mb-4">
                        <button type="submit" class="px-4 py-2 text-white bg-green-700 rounded my-btn">Invia</button>
                    </div>

                </form>
            </div>
        </section>

    @endsection
</x-app-layout>

<style>
    .invalid-feedback{
        color:red;
    }
</style>
