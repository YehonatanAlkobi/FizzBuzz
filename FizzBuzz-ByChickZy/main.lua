for i = 1, 200 do
    if i%35 == 0 then
      print("FizzBuzz")
    elseif i%7 == 0 then
      print("Buzz")
    elseif i%5 == 0 then
      print("Fizz")
    else
      print(i)
    end
  end