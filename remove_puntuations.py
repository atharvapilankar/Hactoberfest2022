def rem_punctuation(s):
  punctuations = '''!()-[]{};:'"\,<>./?@#$%^&*_~'''
  no_punct = ""
  for char in s:
     if char not in punctuations:
         no_punct = no_punct + char
  print(no_punct)
  
  
s = input("Enter the string you want to remove punctuations ")
rem_punctuation(s)
