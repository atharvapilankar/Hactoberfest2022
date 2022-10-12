import streamlit as st
import numpy as np
import pandas as pd
# Please check the strealit documentation on : https://docs.streamlit.io/library/get-started/main-concepts
dataframe = pd.DataFrame(
    np.random.randn(10, 20),
    columns=('col %d' % i for i in range(20)))

st.dataframe(dataframe.style.highlight_max(axis=0)) 
