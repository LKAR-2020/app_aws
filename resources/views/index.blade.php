
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
                    <table class="w-full text-center">
                        <thead class="border-b bg-gray-800">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              #
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              Nom
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              Prenom
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                              Numero
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                             Email
                            </th>
                          </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($listes as $user)
                            
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$user->id}}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$user->name}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$user->prenom}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{$user->numero}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$user->email}}
                                  </td>
                              </tr class="bg-white border-b">
                            @endforeach
                          
                          {{-- <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                              Larry the Bird
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              @twitter
                            </td>
                          </tr> --}}
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>