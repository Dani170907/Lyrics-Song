from PIL import Image

def image_to_ascii(image_path, new_width=100):
    # Karakter ASCII yang lebih terang
    chars = " .:-=+*#%@"
    
        # Buka gambar dan konversi ke grayscale
    try:
        img = Image.open(image_path).convert("L")
    except Exception as e:
        print(f"Error membuka gambar: {e}")
        return None

    # Ukuran asli gambar
    width, height = img.size

    # Rasio aspek diperbaiki agar tidak terlalu gepeng
    char_ratio = 0.41  # Bisa disesuaikan tergantung font terminal
    new_height = int((height / width) * new_width * char_ratio)

    # Resize gambar
    img = img.resize((new_width, new_height))

    # Normalisasi nilai pixel agar terbagi rata ke karakter ASCII
    ascii_str = "".join([chars[min(pixel // (200 // (len(chars) - 1)), len(chars) - 1)] for pixel in img.getdata()])

    # Format hasil dalam bentuk baris
    ascii_art = "\n".join([ascii_str[i:i + new_width] for i in range(0, len(ascii_str), new_width)])

    return ascii_art

# Ganti dengan path gambar yang ingin digunakan
image_path = "img7.jpg"
new_width = 125

ascii_art = image_to_ascii(image_path, new_width)

if ascii_art:
    print(ascii_art)
    with open("ascii_art.txt", "w") as f:
        f.write(ascii_art)

        # python ascii_art.py