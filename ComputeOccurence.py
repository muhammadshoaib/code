def ComputeOccurence(text):
	three_mars = list(itertools.product(alphabets, repeat=3))
	mar_dict = dict()
	for three_mar in three_mars:
		mar_dict[''.join(list(three_mar))] = 0
	l = len(text)
	for i in range(0, l-2):
		text_mar = text[i:i+3]
		mar_dict[text_mar] = mar_dict[text_mar] + 1
	return mar_dict
