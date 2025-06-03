<x-layout>
    <x-slot name="title">NEXORA - Разработка вашего цифрового продукта</x-slot>
    
    <x-hero />
    <x-info-section />
    <x-features />
    <x-services :services="$services" />
    <x-cases :cases="$cases" />
    <x-consultation-form />
    <x-footer />
</x-layout>
