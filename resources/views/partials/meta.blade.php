

@extends('app')
@section('title', $items->title . ' | KOLL.com.ph')
@section('og-title', $items->title)
@section('og-image', $items->images)
@section('og-description', preg_replace( "/\r|\n/", "", $items->description))
<!-- @section('og-image', secure_url( $items->images )) -->




