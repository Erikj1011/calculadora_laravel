<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora - Laravel 12</title>
</head>
<body>
    <h1>Calculadora - Laravel 12</h1>

    <form action="{{ route('calculadora.calcular') }}" method="POST">
        @csrf

        <div>
            <label for="valor1">Primer número</label>
            <br>

            <input
                type="number"
                id="valor1"
                name="valor1"
                step="any"
                value="{{ old('valor1') }}"
                required
            >

            @error('valor1')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="valor2">Segundo número</label>
            <br>

            <input
                type="number"
                id="valor2"
                name="valor2"
                step="any"
                value="{{ old('valor2') }}"
                required
            >

            @error('valor2')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="operacion">Operación</label>
            <br>

            <select id="operacion" name="operacion" required>
                <option value="">Seleccione una operación</option>

                <option
                    value="sumar"
                    @selected(old('operacion') === 'sumar')
                >
                    Sumar
                </option>

                <option
                    value="restar"
                    @selected(old('operacion') === 'restar')
                >
                    Restar
                </option>

                <option
                    value="multiplicar"
                    @selected(old('operacion') === 'multiplicar')
                >
                    Multiplicar
                </option>

                <option
                    value="dividir"
                    @selected(old('operacion') === 'dividir')
                >
                    Dividir
                </option>
            </select>

            @error('operacion')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Calcular</button>
    </form>

    @isset($resultado)
        <h2>Resultado: {{ $resultado }}</h2>
    @endisset
</body>
</html>