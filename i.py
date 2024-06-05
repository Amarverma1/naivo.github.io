def count_words(text):
    # Split the text by whitespace characters
    words = text.split()
    # Return the number of words
    return len(words)

# Example usage
text = input("Enter the text:")
word_count = count_words(text)
print(f"The number of words in the text is: {word_count}")
