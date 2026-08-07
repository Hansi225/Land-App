@extends('layouts.app')

@section('title', 'Find Land Parcel')

@section('content')
<section class="find-hero">
  <div class="section-container">
    <div class="find-card">
      <div class="section-header" style="text-align:left;">
        <h2 class="section-title">Find Land Parcel</h2>
        <p class="section-subtitle">Search by map, block, sheet and lot numbers.</p>
      </div>

      <div class="find-grid">
        <div>
          <form class="find-form" method="POST" action="{{ route('find') }}">
            @csrf
            <div class="form-group">
              <label class="form-label">Map Number</label>
              <input name="map_number" class="form-input" type="text" placeholder="e.g. 310052" value="{{ old('map_number', isset($query['map']) ? $query['map'] : '') }}">
            </div>

            <div class="form-group">
              <label class="form-label">Block Number</label>
              <input name="block_number" class="form-input" type="text" placeholder="e.g. 04" value="{{ old('block_number', isset($query['block']) ? $query['block'] : '') }}">
            </div>

            <div class="form-group">
              <label class="form-label">Sheet Number</label>
              <input name="sheet_number" class="form-input" type="text" placeholder="e.g. 310" value="{{ old('sheet_number', isset($query['sheet']) ? $query['sheet'] : '') }}">
            </div>

            <div class="form-group">
              <label class="form-label">Lot Number</label>
              <input name="lot_number" class="form-input" type="text" placeholder="e.g. 125" value="{{ old('lot_number', isset($query['lot']) ? $query['lot'] : '') }}">
            </div>

            <div class="find-actions">
              <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Find</button>
              <a href="{{ url('/') }}" class="btn btn-outline">Home</a>
            </div>
          </form>

          @if(isset($result))
            <div class="result-card">
              <h3 style="margin-bottom:0.6rem;">Result</h3>
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.6rem;">
                <div><strong>Owner / Name</strong><div>{{ $result['name'] }}</div></div>
                <div><strong>Size</strong><div>{{ $result['size'] }}</div></div>
                <div><strong>Current Stage</strong><div>{{ $result['current_stage'] }}</div></div>
                <div><strong>File Number</strong><div>{{ $result['file_number'] }}</div></div>
                <div><strong>Gazette Number</strong><div>{{ $result['gazette_number'] }}</div></div>
                <div><strong>Gazetted Date</strong><div>{{ $result['gazetted_date'] }}</div></div>
              </div>
            </div>
          @endif
        </div>

        <div class="hero-illustration">
          <img src="{{ asset('img/find-illustration.png') }}" alt="Map illustration" style="max-width:100%; border-radius:10px;">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

